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
                    
                      <tr>
                        <td>#</td>

                        <td><h5>200</h5>
                        </td>

                        <td><h5>100</h5>
                        </td>

                        <td>
                         <h5>6/2/2022</h5>
                        </td>  

                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <!-- end project list -->


@endsection