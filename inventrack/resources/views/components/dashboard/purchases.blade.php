@props(['href'])

<x-dashboard.link :$href>
    <div class="h-4/6 flex justify-center items-center">
        <svg
            fill="#000000" class="w-16 h-16" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 296.605 296.605" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 296.605 296.605"
        >
            <g><polygon points="187.149,66.105 187.149,115.105 210.345,115.105 170.921,181.105 132.62,115.105 155.149,115.105 155.149,66.105    84.715,66.105 73.983,19.968 15.842,0 5.123,31.211 45.981,45.243 84.982,214.105 257.982,214.105 291.482,66.105  "/><circle cx="117.982" cy="264.105" r="32.5"/><circle cx="224.982" cy="264.105" r="32.5"/></g>
        </svg>
    </div>
    <span class="text-black mt-1">
        {{$slot}}
    </span>
</x-dashboard.link>