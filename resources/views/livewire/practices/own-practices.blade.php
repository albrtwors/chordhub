<div>

    <!-- PRACTICES ROW GRID -->
    <div class="row gap-3">
        @foreach($practices as $practice)
        <div class="col-xl-4 col-md-6 col-sm-8 col-8 d-flex flex-column gap-1 rounded border p-3 bg-white">
            <div class="d-flex gap-3">
            <h6 class="text-black fw-bold">
                {{ $practice->name }}
            </h6>
            <div class="flex-1 d-flex justify-content-end">
                <x-dates.date-state-helper date="{{ $practice->start_date. ' '.$practice->end_hour }}" />

            </div>
            </div>
            <div class="d-flex gap-2 text-primary-subtle">
                <i class="fas text-primary fa-calendar">

                </i>
                <p class="text-primary">
                    {{ $practice->start_date }}
                </p>
                
            </div>
            <div class="d-flex gap-2 text-primary-subtle">
                <i class="fas text-primary fa-clock">

                </i>
                <p class="text-primary">
                    {{$practice->start_hour }} - {{ $practice->end_hour }}
                </p>

                
            </div>
            
            <p class="fw-bold text-black">Participantes</p>
            <div style="" class="d-flex gap-3">
                @if(count($practice->userParticipants)!=0)
                    @foreach($practice->userParticipants as $index=>$participant)
                        @if($index==0)
                            <img style="border-radius:100%" src="{{ $participant->image ? $participant->image->url : 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png' }}" width="50" height="50" alt="">
                        @else
                            <img style="margin-left:-10px; border-radius:100%" src="{{ $participant->image ? $participant->image->url : 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png' }}" width="50" height="50" alt="">
                        @endif
                    @endforeach
                @else
                    @foreach(explode(',',$practice->participants) as $participant)
                        <div>
                            <div class="btn bg-primary-subtle text-primary">
                                {{ $participant }}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>


            <p class="fw-bold text-black">Implementos</p>
            <div class="row gap-3">
                @foreach($practice->items as $item)
                <div>
                    <span class="bg-primary-subtle text-primary btn">
                        {{ $item->name  .' x '. $item->quantity}}
                    </span>
                </div>
                @endforeach
            </div>

        </div>
        @endforeach
        
        
    </div>

</div>