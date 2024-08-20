<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-6 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="">{{ $post['Author'] }}</a> | 12 Januari 2022
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Post</a>
    </article>
</x-layout>
