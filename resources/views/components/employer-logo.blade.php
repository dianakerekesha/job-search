@props(['employer', 'width' => 90])

@if(Storage::disk('public')->exists($employer->logo))
    <img src="{{ asset('storage/' . $employer->logo) }}"
         alt=""
         class="rounded-xl"
         width="{{ $width }}">
@else
    <img src="https://picsum.photos/seed/{{ $employer->id ?? rand(0, 100000) }}/{{ $width }}"
         alt=""
         class="rounded-xl">
@endif
