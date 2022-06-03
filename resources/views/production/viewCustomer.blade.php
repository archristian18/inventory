@extends('production.layout')
@section ('content')


                   <!-- start project list -->
                   <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Customer Name</th>
                        <th>Transaction Options</th>
                        <th>Total Balance</th>
                        <th style="width: 20%">Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    
             
                       
                    @if($list !== 0)
                    
                      @foreach($list as $item) 
                      <tr>
                        
                        <td>{{ $loop->iteration }}</td>

                        <td>
                          <h5>{{ $item->firstname }}</h5>
                        </td>
                       
                        <td>
                          <h5>{{ $item->options }}</h5>
                        </td>

                        <td>
                          <h5>{{ $item->totals }}</h5>
                         
                        </td>

                        <td>  

                          <a href="{{  route('customer.show', $item->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Records </a>
                          {{-- <a href="{{ route('crud.show', $item->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> --}}
                          
                          {{-- <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a> --}}
                          {{-- <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a> --}}
                        </td>

                      </tr>
                      @endforeach
                @else
                      <td> Guest </td>        
                @endif



                     
               
                    </tbody>
                  </table>
                  <!-- end project list -->



@endsection