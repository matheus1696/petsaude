<div class="inline-block">
    <a
        title="{{$title ?? ''}}"
        href="{{$route}}"
        class="px-2 py-1 m-1 text-xs text-white rounded-lg shadow-md bg-{{$color ?? 'purple'}}-700 hover:bg-{{$color ?? 'purple'}}-900"
    >
        <i class="{{$icon ?? 'fas fa-location-arrow'}} text-xs"></i>
        @isset($btnTitle)
            <span class="font-semibold">{{$btnTitle}}</span>
        @endisset
    </a>
</div>
