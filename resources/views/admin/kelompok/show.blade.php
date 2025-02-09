<x-app-layout :title="'Kelompok ' . $kelompok->nama">
    <div class="space-y-5">
        <div class="card bg-white shadow">
            <div class="card-body">
                <div>
                    <div class="mb-5 pb-5 border-b">
                        <div class="mb-3">Nama Kelompok</div>
                        <div class="text-xl font-semibold">{{ $kelompok->nama }}</div>
                    </div>
                    <div class="mb-5 pb-5 border-b">
                        <div class="mb-3">Asal Universitas</div>
                        <div class="text-xl font-semibold">{{ $kelompok->asal_universitas }}</div>
                    </div>
                </div>
                <div>
                    <div class="flex lg:flex-row flex-col gap-x-3 items-center justify-between">
                        <div class="lg:flex-1 w-full mb-5">
                            <div class="pb-5 border-b">
                                <div class="mb-3">Nama Ketua</div>
                                <div class="text-xl font-semibold">{{ $kelompok->ketua_nama }}</div>
                            </div>
                        </div>
                        <div class="lg:flex-1 w-full mb-5">
                            <div class="pb-5 border-b">
                                <div class="mb-3">NIM Ketua</div>
                                <div class="text-xl font-semibold">{{ $kelompok->ketua_nim }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body bg-white shadow" x-data="{
            selected: 1,
            hash: window.location.hash,
            setSelected(val) {
                this.selected = val;
                window.location.hash = '#tab-' + val;
            }
        }" x-init="() => {
            if (hash.includes('tab-')) {
                selected = hash.split('tab-')[1];
            }
        }">
            <div class="tabs">
                <a href="javascript:void(0)" x-on:click="setSelected(1)"
                    x-bind:class="'tab tab-lg tab-bordered ' + (selected == 1 ? 'tab-active' : '')">Daftar Anggota</a>
                <a href="javascript:void(0)" x-on:click="setSelected(2)"
                    x-bind:class="'tab tab-lg tab-bordered ' + (selected == 2 ? 'tab-active' : '')">Jenis Usaha</a>
                <a href="javascript:void(0)" x-on:click="setSelected(3)"
                    x-bind:class="'tab tab-lg tab-bordered ' + (selected == 3 ? 'tab-active' : '')">Pemasaran Bisnis</a>
                <a href="javascript:void(0)" x-on:click="setSelected(4)"
                    x-bind:class="'tab tab-lg tab-bordered ' + (selected == 4 ? 'tab-active' : '')">Hasil Kegiatan</a>
            </div>

            <div class="mt-10">
                <div x-show="selected == 1">
                    @include('admin.kelompok.partials.anggota')
                </div>
                <div x-show="selected == 2">
                    @include('admin.kelompok.partials.usaha')
                </div>
                <div x-show="selected == 3">
                    @include('admin.kelompok.partials.pemasaran')
                </div>
                <div x-show="selected == 4">
                    @include('admin.kelompok.partials.laporan')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
