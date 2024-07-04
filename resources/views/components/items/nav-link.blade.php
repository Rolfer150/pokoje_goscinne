<a {{ $attributes->merge([
    'class' => "",
    'href' => $linkUrl,
]) }}>
    <span class="transition text-gray-700 hover:text-gray-400 duration-200 {{Request::is(trim(parse_url($linkUrl, PHP_URL_PATH), '/')) ? "text-emerald-300" : ""}}">{{ $title }}</span>
</a>
