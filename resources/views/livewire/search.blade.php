
<div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search-box">

<div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div> 
    <div class="input-group form-container">
        <input type="text" name="search" wire:model="query" class="form-control search-input" placeholder="Keyword" autofocus="autofocus" autocomplete="off" onclick="setBgToDark()">

        <span class="input-group-btn">
            <button class="btn btn-search">
                <img src="{{ asset('assets/images/search.png')}}" width="40">
            </button>
        </span>
        <div class="dropdown-item no-border " class="form-control">

            @foreach($clients as $i => $client)
            <form>
                <input type="hidden" wire:model="post_id">


                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">{{ $client['full_name'] }}</span>
                    <span class="input-group-text" id="inputGroup-sizing-sm">{{ $client['address'] }}</span>
                    <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-sm">{{ $client['previous'] }}</span>

                    @if($client['curent'])
                    <span class="input-group-text  bg-primary text-white" id="inputGroup-sizing-sm">{{$client['curent']}}</span>
                    @endif
                    <input type="text" wire:model="curent" id="inputGroup-sizing-sm" class="form-control no-border">
                    <button type="button" wire:click.prevent="update({{$client['id']}})" class="btn btn-success">enter</button>

                </div>
            </form>
            @endforeach
        </div>

    </div>
</div>