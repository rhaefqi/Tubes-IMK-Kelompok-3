<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="font-open mt-4 flex flex-col">
        <form wire:submit.prevent="createSiswa" class="">
            <div class="w-full mb-5 px-10">
                <label for="name" class="text-base text-primary font-bold">NISN</label>
                <input wire:model.live="nisn" type="text" id="name" name="nama"
                    class="w-full text-dark rounded-md transition duration-300 focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required />
                @error('nisn')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full mb-5 px-10">
                <label for="name" class="text-base text-primary font-bold">Nama</label>
                <input wire:model.live="nama" type="text" id="name" name="nama"
                    class="w-full text-dark rounded-md transition duration-300 focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required />
                @error('nama')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full mb-5 px-10 flex flex-col space-y-1">
                <label for="Jenis_kelamin" class="text-base text-primary font-bold">Jenis Kelamin</label>
                <div class="flex space-x-4">
                    <div class="flex items-center space-x-1">
                        <input wire:model.live="jenisKelamin" type="radio" id="laki_laki" name="jenis_kelamin" value="L"
                        class=" text-dark rounded-full transition duration-300 focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required />
                        <label for="laki_laki" class="text-base text-primary font-bold">Laki Laki</label>
                    </div>
                    <div class="flex items-center space-x-1">
                        <input wire:model.live="jenisKelamin" type="radio" id="perempuan" name="jenis_kelamin" value="P"
                            class=" text-dark rounded-full transition duration-300 focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required />
                        <label for="perempuan" class="text-base text-primary font-bold">Perempuan</label>
                    </div>
                </div>
                @error('jenisKelamin')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full mb-5 px-10 flex flex-col">
                <label for="tingkat" class="text-base text-primary font-bold">Tingkat</label>
                <select wire:model.live="tingkat" name="tingkat" id="tingkat" class=" w-full rounded-md transition duration-300 focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required ">
                    <option value="">Pilih Tingkatan</option>
                    <option value="ma">MA (Madrasah Aliyah)</option>
                    <option value="mts">MTs (Madrasah Tsanawiyah)</option>
                    <option value="sd">SD (Sekolah Dasar)</option>
                </select>
                @error('tingkat')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full mb-5 px-10 flex flex-col">
                <label for="kelas" class="text-base text-primary font-bold">Kelas</label>
                <select wire:modal.live="kelas" name="kelas" id="kelas" class=" w-full rounded-md transition duration-300 focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required ">
                    <option value="">Pilih Kelas</option>
                    <option value="ma">X - A</option>
                    <option value="mts">MTs (Madrasah Tsanawiyah)</option>
                    <option value="sd">SD (Sekolah Dasar)</option>
                </select>
                @error('kelas')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

                <div class="flex justify-center  mb-7">
                    <button class="mr-3 text-base font-semibold text-white bg-primary py-3 px-8 rounded-lg hover:opacity-80 hover:shadow-lg transition duration-300" type="submit">
                        Tambah
                    </button>
                    <button x-on:click="show = false" class="text-base font-semibold text-white bg-red-800 py-3 px-8 rounded-lg hover:opacity-80 hover:shadow-lg transition duration-300">
                        Batal
                    </button>
                </div>
        </form>
    </div>
</div>