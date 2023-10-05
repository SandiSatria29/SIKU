<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pelaporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Table post -->
                    <a href="{{ route('post.create') }}" class="mb-3">
                        <button type="button"
                            class="border bg-gray-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                            Tambah Data
                        </button>
                    </a>
                    <div class="overflow-scroll">
                        <table class="w-full table-auto border mt-3">
                            <thead class="border-b">
                                <tr>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">NO</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">NO AK</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">Nama</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">Pangkat</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">Kelas</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">TON</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">Tanggal</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">Pelanggaran</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">Pelapor</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">diupload</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4">diupdate</th>
                            </thead>
                            <tbody>
                                @foreach ($post as $item)
                                <tr>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->id }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->noak }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->nama }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->pangkat }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->kelas }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->ton }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->tanggal }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->pelanggaran }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->pelapor }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->created_at }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->updated_at }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>