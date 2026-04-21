@props([
    'label',
    'column',
    'sort',
    'dir',
])

@php
    $isCurrent = $sort === $column;
    $nextDir = $isCurrent && $dir === 'asc' ? 'desc' : 'asc';

    $query = request()->query();
    $query['sort'] = $column;
    $query['dir'] = $nextDir;

    $icon = '↕';
    if ($isCurrent && $dir === 'asc') {
        $icon = '↑';
    } elseif ($isCurrent && $dir === 'desc') {
        $icon = '↓';
    }
@endphp

<a
    href="{{ url()->current() . '?' . http_build_query($query) }}"
    class="inline-flex items-center gap-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-500 transition hover:text-slate-700"
>
    <span>{{ $label }}</span>
    <span class="text-[10px]">{{ $icon }}</span>
</a>