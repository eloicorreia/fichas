@php
    $title = $title ?? '';
    $icon = $icon ?? 'square';
    $open = $open ?? false;
    $critical = $critical ?? false;
@endphp

@php
    $wrapperClasses = $critical
        ? 'rounded-2xl border border-rose-400/20 bg-rose-500/5'
        : 'rounded-2xl border border-white/5 bg-white/[0.03]';

    $summaryClasses = $critical
        ? 'text-rose-100 hover:bg-white/5'
        : 'text-slate-100 hover:bg-white/5';
@endphp

<details class="{{ $wrapperClasses }}" @if ($open) open @endif>
    <summary class="flex cursor-pointer list-none items-center justify-between gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition {{ $summaryClasses }}">
        <span class="flex items-center gap-3">
            <span class="shrink-0">
                @switch($icon)
                    @case('shield')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 3v6c0 5-3.5 8-7 9-3.5-1-7-4-7-9V6l7-3Z" />
                        </svg>
                        @break
                    @case('clipboard')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="8" y="3" width="8" height="4" rx="1" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" />
                        </svg>
                        @break
                    @case('users')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" />
                            <circle cx="9.5" cy="7" r="4" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 0 0-3-3.87" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 3.13A4 4 0 0 1 16 10.87" />
                        </svg>
                        @break
                    @default
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                @endswitch
            </span>

            <span>{{ $title }}</span>
        </span>

        <svg class="h-4 w-4 shrink-0 transition" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.51a.75.75 0 0 1-1.08 0l-4.25-4.51a.75.75 0 0 1 .02-1.06Z" clip-rule="evenodd" />
        </svg>
    </summary>

    <div class="space-y-2 px-3 pb-3">
        {!! $slot ?? '' !!}
    </div>
</details>