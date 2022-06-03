@extends('production.layout')
@section ('content')


                   <!-- start project list -->
                   <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Load</th>
                        <th>Transaction Options</th>
                        <th>Total Balance</th>
                        <th>Method</th>
                      </tr>
                    </thead>
                    <tbody>
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

                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                  <!-- end project list -->



@endsection