  <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email Id</th>
                                            <th>Feedback</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php

                                        $name = App\riview::all();
                                        

                                        @endphp
                                        @foreach($name as $nae)
                                        <tr>
                                            <td>{{$nae->name}}</td>
                                            <td>{{$nae->email}}</td>
                                            <td>{{$nae->Commentsssss}}</td>
                                           
                                        </tr>
                                        @endforeach

                                    </tbody>
                                   