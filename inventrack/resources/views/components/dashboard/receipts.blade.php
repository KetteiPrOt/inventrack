@props(['href'])

<x-dashboard.link :$href>
    <div class="h-1/2 flex justify-center items-center">
        <svg
            class="w-16 h-16"
            fill="#000000" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"
        >
            <g fill-rule="evenodd">
                <path d="M1185.471 0v564.706h564.705V1920H169V0h1016.471Zm-225.77 1355.294H507.823v113.054h451.878v-113.054Zm338.711-225.881H507.823v112.94h790.589v-112.94Zm-112.941-225.884H507.823v112.941h677.648V903.529Zm225.882-225.882h-903.53v112.941h903.53V677.647ZM959.701 451.878H507.823v112.941h451.878V451.878Z"/>
                <path d="M1667.673 345.623c30.38 30.268 51.84 66.635 65.619 106.164h-434.937V16.851c39.53 13.779 75.897 35.35 106.278 65.619l263.04 263.153Z"/>
            </g>
        </svg>
    </div>
    <span class="text-black mt-1">
        {{$slot}}
    </span>
</x-dashboard.link>