@extends('index')

@section('page-body')
<div class="flex-center position-relative bosses">
    <a id="boss1"></a>
    <div class="container bg-secondary">
        <div class="boss-map-container float-right">
            <button type="button" class="btn btn-dark float-right" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <img src="https://s3.amazonaws.com/noxguild/notes/{{ $boss }}-map.jpg" alt="{{ ucfirst($boss) }} Map" class="float-right boss-map"><br/>Toggle Map
            </button>
            <div class="collapse multi-collapse boss-map-big-container" id="multiCollapseExample1">
                <div class="card card-body">
                    <img src="https://s3.amazonaws.com/noxguild/notes/{{ $boss }}-map.jpg" alt="{{ ucfirst($boss) }} Map" class="float-right boss-map-big">
                </div>
            </div>

        </div>

        <h1 class="display-5 text-light">@if($boss == 'ra-den') {{ ucfirst($boss) }} @else {{ ucfirst(str_replace('-', '\'', $boss)) }} @endif</h1>

        <ul class="nav nav-tabs boss-nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="tank-tab" data-toggle="tab" href="#tank" role="tab" aria-controls="tank" aria-selected="true">Tank</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="dps-tab" data-toggle="tab" href="#dps" role="tab" aria-controls="dps" aria-selected="false">DPS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="healer-tab" data-toggle="tab" href="#healer" role="tab" aria-controls="healer" aria-selected="false">Healer</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="tank" role="tabpanel" aria-labelledby="tank-tab">
                <div class="card bg-secondary text-light">
                    <div class="card-body spec-cards">
                        <h5 class="card-title display-7">Tank Quick Notes:</h5>
                        <h6 class="card-subtitle mb-2 card-duty text-dark">{!! $assignments['tank'] !!}</h6>
                        <ul class="list-group list-group-flush bg-dark text-light">
                            <li class="list-group-item card-phase text-dark">{!! $phaseOne['tank'][0] !!}</li>
                            @foreach($phaseOne['tank']['notes'] as $tankNotesOne)
                            <li class="list-group-item bg-dark text-light">{!! $tankNotesOne !!}</li>
                            @endforeach
                        </ul>
                        @if(!empty($phaseTwo['tank']['notes']))
                        <ul class="list-group list-group-flush bg-dark text-light">
                            <li class="list-group-item card-phase text-dark">{!! $phaseTwo['tank'][0] !!}</li>
                            @foreach($phaseTwo['tank']['notes'] as $tankNotesTwo)
                            <li class="list-group-item bg-dark text-light">{!! $tankNotesTwo !!}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="dps" role="tabpanel" aria-labelledby="dps-tab">
                <div class="card bg-secondary text-light">
                    <div class="card-body">
                        <h5 class="card-title display-7">DPS Quick Notes:</h5>
                        <h6 class="card-subtitle mb-2 card-duty text-dark">{!! $assignments['dps'] !!}</h6>
                        <ul class="list-group list-group-flush bg-dark text-light">
                            <li class="list-group-item card-phase text-dark">{!! $phaseOne['dps'][0] !!}</li>
                            @foreach($phaseOne['dps']['notes'] as $dpsNotesOne)
                            <li class="list-group-item bg-dark text-light">{!! $dpsNotesOne !!}</li>
                            @endforeach
                        </ul>
                        @if(!empty($phaseTwo['dps']['notes']))
                        <ul class="list-group list-group-flush bg-dark text-light">
                            <li class="list-group-item card-phase text-dark">{!! $phaseTwo['dps'][0] !!}</li>
                            @foreach($phaseTwo['dps']['notes'] as $dpsNotesTwo)
                            <li class="list-group-item bg-dark text-light">{!! $dpsNotesTwo !!}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="healer" role="tabpanel" aria-labelledby="healer-tab">
                <div class="card bg-secondary text-light">
                    <div class="card-body">
                        <h5 class="card-title display-7">Healer Quick Notes:</h5>
                        <h6 class="card-subtitle mb-2 card-duty text-dark">{!! $assignments['healer'] !!}</h6>
                        <ul class="list-group list-group-flush bg-dark text-light">
                            <li class="list-group-item card-phase text-dark">{!! $phaseOne['healer'][0] !!}</li>
                            @foreach($phaseOne['healer']['notes'] as $healerNotesOne)
                            <li class="list-group-item bg-dark text-light">{!! $healerNotesOne !!}</li>
                            @endforeach
                        </ul>
                        @if(!empty($phaseTwo['healer']['notes']))
                        <ul class="list-group list-group-flush bg-dark text-light">
                            <li class="list-group-item card-phase text-dark">{!! $phaseTwo['healer'][0] !!}</li>
                            @foreach($phaseTwo['healer']['notes'] as $healerNotesTwo)
                            <li class="list-group-item bg-dark text-light">{!! $healerNotesTwo !!}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>

<hr>

        <h2 class="display-7 text-light">Mythic Changes:</h2>
        <ul class="list-group list-group-flush bg-dark text-light">
            @if(empty($mythic)) {!! '<li class="list-group-item bg-dark text-light">Mythic notes need to be added here!</li>' !!} @endif
            @foreach($mythic as $mythicNotes)
            <li class="list-group-item bg-dark text-light">{!! $mythicNotes !!}</li>
            @endforeach
        </ul>

    </div>
</div>
@endsection()