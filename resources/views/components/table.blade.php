<div class="card">
    <div class="header">
        <h2>{{ Str::upper($title) }}</h2>
        <ul class="header-dropdown m-r-5 m-t--5">
            @can('onlyAdmin', Auth::user())
            <a href="{{ route("$title.create") }}" class="btn bg-red waves-effect">
                <i class="material-icons">add</i>
                <span>{{ Str::upper('create new')}}</span>
            </a>
            @endcan
        </ul>
    </div>
    <div class="body table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                	@foreach ($headers as $header)
                	   <th>{{ Str::upper($header) }}</th>
                	@endforeach
                </tr>
            </thead>
            <tbody>
            	@foreach ($resource as $data)
                	<tr>
                        @foreach ($items as $item => $valueItem)
                            <td>
                                @if(isset($relations))
                                    @foreach($relations as $relation => $value)
                                        @if ($relation == $valueItem)
                                            {{  Str::upper($data[$value[0]][$value[1]]) }}
                                        @endif
                                    @endforeach
                                @endif
                                @if (!is_array($data[$valueItem]) && !is_object($data[$valueItem]))
                                    {{ Str::upper($data[$valueItem]) }}
                                @endif
                            </td>
                        @endforeach
                    	<td>
                    		<div class="btn-group">
                                {{-- @can('onlyAdmin', Auth::user()) --}}
                                    <button type="button" class="btn bg-red dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        DEFAULT <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route("$title.show", $data) }}" class=" waves-effect waves-block">show</a></li>
                                        <li><a href="{{ route("$title.edit", $data) }}" class=" waves-effect waves-block">edit</a></li>
                                        <li>
                                            <form id="delete-form" action="{{ route("$title.destroy", $data) }}" hidden="hidden" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            <a href="{{ route("$title.destroy", $data) }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" class=" waves-effect waves-block">delet</a>
                                        </li>
                                    </ul>
                                {{-- @endcan --}}

                                {{-- @can('canIEdit', Auth::user())
                                    <button type="button" class="btn bg-red dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        DEFAULT <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route("$title.show", $data) }}" class=" waves-effect waves-block">show</a></li>
                                        <li><a href="#" class=" waves-effect waves-block">yo mismo</a></li>
                                    </ul>
                                @endcan --}}

                                {{-- @can('basic', Auth::user())
                                    <button type="button" class="btn bg-red dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        DEFAULT <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route("$title.show", $data) }}" class=" waves-effect waves-block">show</a></li>
                                        @can('canIEdit', Auth::user())
                                    </ul>
                                @endcan --}}
                            </div>
                    	</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $slot }}
    </div>
</div>