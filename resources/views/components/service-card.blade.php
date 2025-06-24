<div class="col-lg-4 col-md-6 service-item">
    <a class="text-black" wire:navigate href="{{route('servicePage.index',$item->id)}}">
        <div class="block"> <span class="colored-box text-center h3 mb-4">{{$i++}}</span>
            <h3 class="mb-3 service-title">{{$item->title}}</h3>
            <p class="mb-0 service-description">{!! $item->description !!}</p>
        </div>
    </a>
</div>
