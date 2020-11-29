<tbody>
    @if (count($records))
        @foreach ($records as $key => $record)
            <tr>
                @if ($enableMassAction)    
                <td> <div class="icheck-primary">
                    <input type="checkbox" class="checkbox" value="{{$record->id}}" id="check1">
                    <label for="check1"></label>
                  </div></td>
                @endif
                @foreach ($results['columns'] as $key =>  $column)
                    <td>
                        @php 
                            $index = $column['index'];
                            $indexType = $column['type'];
                            if($HumanizeDateTime) {
                                if($index == 'C.at' || $index == 'U.at' || $index == 'created_at' || $index == 'updated_at') {
                                    $record->created_at = \Carbon\Carbon::parse($record->created_at)->diffForHumans();
                                    $record->updated_at = \Carbon\Carbon::parse($record->created_at)->diffForHumans();
                                }
                            }
                            if($indexType ==  'image') { 
                                $record->$index = "<img src='".$record->$index."' width='50px'/>";
                            }

                            if($indexType == 'bool'){
                                if($record->$index) {
                                    $record->$index = '<button class="primary btn btn-sm">ON</button>';
                                }
                                if(!$record->$index) {
                                    $record->$index = '<button class="primary btn btn-sm">OFF</button>';
                                }
                            }
                        @endphp

                        {!! $record->$index !!}
                    </td>
                @endforeach
                @if($enableAction) 
                    <td>
                        <div role="group" class="btn-group btn-group-sm">
                            @foreach ($actions as $action)
                                @if ($action['title'] === 'Edit')
                                <a href="{{route($action['route'] , $record->id)}}"  class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                @endif
                                @if ($action['title'] === 'Delete')
                                <form action="{{route($action['route'] , $record->id)}}" method="POST">
                                    @csrf
                                    @method($action['method'])
                                    <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                </form>
                                @endif
                            @endforeach
                        </div>
                    </td>
                @endif
            </tr>
        @endforeach
    @endif
 </tbody>