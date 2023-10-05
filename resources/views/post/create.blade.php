<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaduan') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('post.store') }}" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="NO AK" :value="__('NO AK')" />
                            <x-text-input id="noak" name="noak" type="text" class="mt-1 block w-full" />
                            <x-input-error class="mt-2" :messages="$errors->get('noak')" />
                        </div>

                        <div>
                            <x-input-label for="Nama" :value="__('Nama')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>
                        <div>
                            <x-input-label for="Pangkat" :value="__('Pangkat')" />
                            <x-text-input id="pangkat" name="pangkat" type="text" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('pangkat')" />
                        </div>


                        <div>
                            <x-input-label for="Kelas" :value="__('Kelas')" />
                            <x-text-input id="kelas" name="kelas" type="text" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('kelas')" />
                        </div>

                        <div>
                            <x-input-label for="TON" :value="__('TON')" />
                            <x-text-input id="ton" name="ton" type="text" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('ton')" />
                        </div>

                        <div>
                            <x-input-label for="Tanggal" :value="__('Tanggal')" />
                            <x-text-input id="tanggal" name="tanggal" type="date" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal')" />
                        </div>

                        <label for="Pelanggaran" :value="__('Pelanggaran')">Pelanggaran</label>
                        <select id="pelanggaran" name="pelanggaran"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option>Teguran</option>
                            <option>Canada</option>
                            <option>France</option>
                            <option>Germany</option>
                                   
                        </select>

                        <div>
                            <x-input-label for="Pelapor" :value="__('Pelapor')" />
                            <x-text-input id="pelapor" name="pelapor" type="text" class="mt-1 block w-full" required />
                            <x-input-error class="mt-2" :messages="$errors->get('pelapor')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>

                </div>
            </div>

        </div>
        </form>
    </div>
</x-app-layout>