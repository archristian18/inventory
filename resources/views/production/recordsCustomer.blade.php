@extends('production.layout')
@section ('content')


                   <!-- start project list -->
                   <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Load</th>
                        <th>Transaction Options</th>
                        <th>Total Balance Debt</th>
                        <th>Method</th>
                        <th>Date</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>

                    @if($list !== 0)
                      @foreach($list as $item) 
                      <tr>
                        
                        <td>{{ $item->iteration }}</td>

                        <td>
                          <h5>{{ $item->loads }}</h5>
                        </td>
                       
                        <td>
                          <h5>{{ $item->options }}</h5>
                        </td>

                        <td>
                          <h5>{{ $item->totals }}</h5>
                         
                        </td>

                        <td>
                          <h5>{{ $item->method }}</h5>
                        </td>
                        <td>
                          <h5>{{ $item->created_at->toDateString(); }}</h5>
                        </td>
                        <td>
                          <a href="{{ route('deleteRecords', $item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>

                      </tr>
                      @endforeach
                    @endif
                    
                    </tbody>
                  </table>
                  <!-- end project list -->



@endsection