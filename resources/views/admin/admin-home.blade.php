@extends('layouts.main-admin')

@section('container')
<main class="">
    <div class="sm:flex mx-3 justify-center">
        <div class="border border-primary rounded-md sm:w-3/5 w-full mt-10 shadow-lg flex text-center sm:text-left justify-center sm:justify-start sm:mr-6">
            <h2 class="sm:text-2xl text-xl font-open text-primary font-bold my-5 sm:ml-5 ">
                Selamat Datang di <br>
                Perpustakaan Amaliyah!
            </h2>
        </div>
        <div class="bg-primary rounded-md sm:w-4/12 w-full mt-10 shadow-lg flex justify-between">
            <h2 class="sm:text-2xl text-xl font-open text-white font-semibold pt-5 pl-5 pb-24">
                Yohana Marito <br>
                Marbun
            </h2>
            <div class="rounded-full bg-slate-200 w-16 h-16 flex items-end mt-5 mr-5">
            </div>
        </div>
    </div>
</main>
@endsection