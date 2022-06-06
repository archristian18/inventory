@extends('production.layout')
@section ('content')


                   <!-- start project list -->
                   <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Customer Name</th>
                        <th>Details</th>
                        <th style="width: 20%">Date</th>
                        <th style="width: 20%">Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item) 
                       

                          
                              <tr>
                                
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                  <h5>{{ $item->firstname }}</h5>
                                </td>
                              
                                <td>
                                  <h5>{{ $item->details }}</h5>
                                </td>

                                <td>
                                  <h5>{{ $item->created_at }}</h5>
                                
                                </td>

                                <td>  

                                  <a href="{{  route('customer.show', $item->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Records </a>

                                </td>

                              </tr>
                      
                          
                            
                        @endforeach
                            
               
                    </tbody>
                  </table>
                  <!-- end project list -->



@endsection