@extends('production.layout')
@section ('content')


                   <!-- start project list -->
                   <table class="table table-striped projects">
                    <thead>
                      <h3>Total Accounts</h3>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">GCASH</th>
                        <th>LOAD WALLET</th>
                        <th>DATE</th>
                        <th style="width: 20%">Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item) 
                      <tr>
                        
                        <td>{{ $item->iteration }}</td>

                        <td>
                          <h5>{{ $item->gcash }}</h5>
                        </td>

                        <td>
                          <h5>{{ $item->loads }}</h5>
                        </td>
                       
                        <td>
                          <h5>{{ $item->created_at->toDateString(); }}</h5>
                        </td>


                        <td>
                          <a href="{{ route('deleteAccount', $item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>

                      </tr>
                    @endforeach
                  
                    </tbody>
                  </table>
                  <!-- end project list -->


@endsection