<div class="grid {{ count($service['gallery']) > 1 ? 'grid-cols-2 gap-4' : 'grid-cols-1' }}  py-5">
    @foreach ($service['gallery'] as $item)
        <div class="col-span-1">
            <div class="aspect-[1/1]">
                <img class="h-full w-full rounded-md object-cover" src="{{ $item }}" alt="{{ $service['title'] }}">
            </div>
        </div>
    @endforeach
</div>
