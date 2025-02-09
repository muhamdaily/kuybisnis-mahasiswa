<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;
use App\Models\ProsesPemasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    function index($id = null)
    {
        $kelompokId = $id ?: Auth::user()->kelompok?->id;

        $proses = ProsesPemasaran::where('kelompok_id', $kelompokId)->first();
        $total = DB::table('penjualan')->select(
            DB::raw('sum(biaya_tetap + biaya_variabel + biaya_operasional + biaya_non_operasional + biaya_pajak) as total_biaya'),
            DB::raw('sum(harga_jual_produk * penjualan_bersih) as total_penjualan')
        )->where('kelompok_id', $kelompokId)->first();

        $data_penjualan = null;
        $hasil = null;
        $grafik = [
            'labels' => json_encode([]),
            'penjualan' => json_encode([]),
            'total_penjualan' => json_encode([]),
            'total_biaya' => json_encode([]),
            'nilai_keuntungan' => json_encode([]),
        ];

        if ($total?->total_penjualan) {
            $totalHasil = (int) $total->total_penjualan - $total->total_biaya;

            if ($totalHasil > $proses->modal_usaha * 2) {
                $medal = 'gold';
            } else if ($totalHasil > $proses->modal_usaha * 1.5) {
                $medal = 'silver';
            } else if ($totalHasil > $proses->modal_usaha) {
                $medal = 'bronze';
            } else {
                $medal = 'nope';
            }
        }

        if ($proses?->modal_usaha) {
            $hasil = [
                'modal' => $proses->modal_usaha,
                'biaya' => (int) $total->total_biaya,
                'penjualan' => (int) $total->total_penjualan,
                'total' => $totalHasil,
                'medal' => $medal,
            ];

            if ($proses->jenis_laporan == 'harian') {
                $items = Penjualan::select(
                    DB::raw('cast(sum(penjualan_bersih) as unsigned) as penjualan_bersih'),
                    DB::raw('cast(avg(harga_jual_produk) as unsigned) as harga_jual_produk'),
                    DB::raw('cast(sum(biaya_tetap) as unsigned) as biaya_tetap'),
                    DB::raw('cast(sum(biaya_variabel) as unsigned) as biaya_variabel'),
                    DB::raw('cast(sum(biaya_operasional) as unsigned) as biaya_operasional'),
                    DB::raw('cast(sum(biaya_non_operasional) as unsigned) as biaya_non_operasional'),
                    DB::raw('cast(sum(biaya_pajak) as unsigned) as biaya_pajak'),
                    DB::raw('date_format(created_at, "%Y-%m-%d") as tanggal')
                )->where('kelompok_id', $kelompokId)
                    ->orderBy('tanggal', 'desc')
                    ->groupBy('tanggal');

                $data_penjualan = $items->simplePaginate(7);

                foreach ($data_penjualan as $item) {
                    $labels[] = formatDate($item->tanggal);
                    $penjualan[] = $item->penjualan_bersih;
                    $total_penjualan[] = $item->total_penjualan_bersih;
                    $total_biaya[] = $item->total_biaya;
                    $nilai_keuntungan[] = $item->nilai_keuntungan_bersih;
                }
            } else if ($proses->jenis_laporan == 'mingguan') {
                $items = Penjualan::select(
                    DB::raw('cast(sum(penjualan_bersih) as unsigned) as penjualan_bersih'),
                    DB::raw('cast(avg(harga_jual_produk) as unsigned) as harga_jual_produk'),
                    DB::raw('cast(sum(biaya_tetap) as unsigned) as biaya_tetap'),
                    DB::raw('cast(sum(biaya_variabel) as unsigned) as biaya_variabel'),
                    DB::raw('cast(sum(biaya_operasional) as unsigned) as biaya_operasional'),
                    DB::raw('cast(sum(biaya_non_operasional) as unsigned) as biaya_non_operasional'),
                    DB::raw('cast(sum(biaya_pajak) as unsigned) as biaya_pajak'),
                    DB::raw('date_format(created_at, "Pekan %V - %Y") as pekan')
                )->where('kelompok_id', $kelompokId)
                    ->orderBy('pekan', 'desc')
                    ->groupBy('pekan');

                $data_penjualan = $items->simplePaginate(5);

                foreach ($data_penjualan as $item) {
                    $labels[] = $item->pekan;
                    $penjualan[] = $item->penjualan_bersih;
                    $total_penjualan[] = $item->total_penjualan_bersih;
                    $total_biaya[] = $item->total_biaya;
                    $nilai_keuntungan[] = $item->nilai_keuntungan_bersih;
                }
            } else {
                $items = Penjualan::select(
                    DB::raw('cast(sum(penjualan_bersih) as unsigned) as penjualan_bersih'),
                    DB::raw('cast(avg(harga_jual_produk) as unsigned) as harga_jual_produk'),
                    DB::raw('cast(sum(biaya_tetap) as unsigned) as biaya_tetap'),
                    DB::raw('cast(sum(biaya_variabel) as unsigned) as biaya_variabel'),
                    DB::raw('cast(sum(biaya_operasional) as unsigned) as biaya_operasional'),
                    DB::raw('cast(sum(biaya_non_operasional) as unsigned) as biaya_non_operasional'),
                    DB::raw('cast(sum(biaya_pajak) as unsigned) as biaya_pajak'),
                    DB::raw('date_format(created_at, "%Y-%m") as bulan')
                )->where('kelompok_id', $kelompokId)
                    ->orderBy('bulan', 'desc')
                    ->groupBy('bulan');

                $data_penjualan = $items->simplePaginate(6);

                foreach ($data_penjualan as $item) {
                    $labels[] = substr(formatDate($item->bulan), 3);
                    $penjualan[] = $item->penjualan_bersih;
                    $total_penjualan[] = $item->total_penjualan_bersih;
                    $total_biaya[] = $item->total_biaya;
                    $nilai_keuntungan[] = $item->nilai_keuntungan_bersih;
                }
            }

            $grafik['labels'] = json_encode($labels);
            $grafik['penjualan'] = json_encode($penjualan);
            $grafik['total_penjualan'] = json_encode($total_penjualan);
            $grafik['total_biaya'] = json_encode($total_biaya);
            $grafik['nilai_keuntungan'] = json_encode($nilai_keuntungan);
        }

        $data = [
            'grafik' => $grafik,
            'hasil' => $hasil,
            'data_penjualan' => $data_penjualan,
            'items' => $items->get(),
        ];

        if ($id) {
            return $data;
        }

        return view('user.laporan.index', $data);
    }
}
