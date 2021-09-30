@extends('pages.layouts.app')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('新規投稿') }}
</h2>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="" method="post">
                <p>
                    タイトル<br>
                    <input type="text" name="title" placeholder="タイトルを入力してください。" required>
                <p>
                    本文<br>
                    <textarea name="body" rows="10" cols="75" placeholder="本文を入力してください。" required></textarea>
                </p>
                <input type="submit" value="投稿する">
            </form>
        </div>
    </div>
</div>
@endsection
