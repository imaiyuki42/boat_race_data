<div class="detail_gamagori">
    <h1>ボートレース蒲郡</h1>
    <div class="racename_gamagori">
        <div class="result_gamagori">
            <h2>{{ $race_name_info['grade'] }} {{ $race_name_info['event_date']['first_date'] }} {{ $race_name_info['race_name'] }}</h2>
            <table>
                <tr>
                    <th>R</th>
                    <th>3連単</th>
                    <th>2連単</th>
                </tr>
                @foreach ($first_date_results as $first_date_result)
                <tr>
                    <td>{{ $first_date_result->race_number }}</td>
                    <td>
                        <span>{{ $first_date_result->trifecta_first }}</span>
                        <span>{{ $first_date_result->trifecta_second }}</span>
                        <span>{{ $first_date_result->trifecta_third }}</span>
                        <span>{{ number_format($first_date_result->trifecta_refund_price, 0) }}円</span>
                        <span>{{ $first_date_result->trifecta_rank }}番人気</span>
                    </td>
                    <td>
                        <span>{{ $first_date_result->exacta_first }}</span>
                        <span>{{ $first_date_result->exacta_second }}</span>
                        <span>{{ number_format($first_date_result->exacta_refund_price, 0) }}円</span>
                        <span>{{ $first_date_result->exacta_rank }}番人気</span>
                    </td>
                </tr>
                @endforeach
            </table>

            <div class="result_gamagori">
                <h2>{{ $race_name_info['grade'] }} {{ $race_name_info['event_date']['second_date'] }} {{ $race_name_info['race_name'] }}</h2>
                <table>
                    <tr>
                        <th>R</th>
                        <th>3連単</th>
                        <th>2連単</th>
                    </tr>
                    @foreach ($second_date_results as $second_date_result)
                    <tr>
                        <td>{{ $second_date_result->race_number }}</td>
                        <td>
                            <span>{{ $second_date_result->trifecta_first }}</span>
                            <span>{{ $second_date_result->trifecta_second }}</span>
                            <span>{{ $second_date_result->trifecta_third }}</span>
                            <span>{{ number_format($second_date_result->trifecta_refund_price, 0) }}円</span>
                            <span>{{ $second_date_result->trifecta_rank }}番人気</span>
                        </td>
                        <td>
                            <span>{{ $second_date_result->exacta_first }}</span>
                            <span>{{ $second_date_result->exacta_second }}</span>
                            <span>{{ number_format($second_date_result->exacta_refund_price, 0) }}円</span>
                            <span>{{ $second_date_result->exacta_rank }}番人気</span>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="result_gamagori">
                <h2>{{ $race_name_info['grade'] }} {{ $race_name_info['event_date']['third_date'] }} {{ $race_name_info['race_name'] }}</h2>
                <table>
                    <tr>
                        <th>R</th>
                        <th>3連単</th>
                        <th>2連単</th>
                    </tr>
                    @foreach ($third_date_results as $third_date_result)
                    <tr>
                        <td>{{ $third_date_result->race_number }}</td>
                        <td>
                            <span>{{ $third_date_result->trifecta_first }}</span>
                            <span>{{ $third_date_result->trifecta_second }}</span>
                            <span>{{ $third_date_result->trifecta_third }}</span>
                            <span>{{ number_format($third_date_result->trifecta_refund_price, 0) }}円</span>
                            <span>{{ $third_date_result->trifecta_rank }}番人気</span>
                        </td>
                        <td>
                            <span>{{ $third_date_result->exacta_first }}</span>
                            <span>{{ $third_date_result->exacta_second }}</span>
                            <span>{{ number_format($third_date_result->exacta_refund_price, 0) }}円</span>
                            <span>{{ $third_date_result->exacta_rank }}番人気</span>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="result_gamagori">
                <h2>{{ $race_name_info['grade'] }} {{ $race_name_info['event_date']['fourth_date'] }} {{ $race_name_info['race_name'] }}</h2>
                <table>
                    <tr>
                        <th>R</th>
                        <th>3連単</th>
                        <th>2連単</th>
                    </tr>
                    @foreach ($fourth_date_results as $fourth_date_result)
                    <tr>
                        <td>{{ $fourth_date_result->race_number }}</td>
                        <td>
                            <span>{{ $fourth_date_result->trifecta_first }}</span>
                            <span>{{ $fourth_date_result->trifecta_second }}</span>
                            <span>{{ $fourth_date_result->trifecta_third }}</span>
                            <span>{{ number_format($fourth_date_result->trifecta_refund_price, 0) }}円</span>
                            <span>{{ $fourth_date_result->trifecta_rank }}番人気</span>
                        </td>
                        <td>
                            <span>{{ $fourth_date_result->exacta_first }}</span>
                            <span>{{ $fourth_date_result->exacta_second }}</span>
                            <span>{{ number_format($fourth_date_result->exacta_refund_price, 0) }}円</span>
                            <span>{{ $fourth_date_result->exacta_rank }}番人気</span>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="result_gamagori">
                <h2>{{ $race_name_info['grade'] }} {{ $race_name_info['event_date']['fifth_date'] }} {{ $race_name_info['race_name'] }}</h2>
                <table>
                    <tr>
                        <th>R</th>
                        <th>3連単</th>
                        <th>2連単</th>
                    </tr>
                    @foreach ($fifth_date_results as $fifth_date_result)
                    <tr>
                        <td>{{ $fifth_date_result->race_number }}</td>
                        <td>
                            <span>{{ $fifth_date_result->trifecta_first }}</span>
                            <span>{{ $fifth_date_result->trifecta_second }}</span>
                            <span>{{ $fifth_date_result->trifecta_third }}</span>
                            <span>{{ number_format($fifth_date_result->trifecta_refund_price, 0) }}円</span>
                            <span>{{ $fifth_date_result->trifecta_rank }}番人気</span>
                        </td>
                        <td>
                            <span>{{ $fifth_date_result->exacta_first }}</span>
                            <span>{{ $fifth_date_result->exacta_second }}</span>
                            <span>{{ number_format($fifth_date_result->exacta_refund_price, 0) }}円</span>
                            <span>{{ $fifth_date_result->exacta_rank }}番人気</span>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="result_gamagori">
                <h2>{{ $race_name_info['grade'] }} {{ $race_name_info['event_date']['sixth_date'] }} {{ $race_name_info['race_name'] }}</h2>
                <table>
                    <tr>
                        <th>R</th>
                        <th>3連単</th>
                        <th>2連単</th>
                    </tr>
                    @foreach ($sixth_date_results as $sixth_date_result)
                    <tr>
                        <td>{{ $sixth_date_result->race_number }}</td>
                        <td>
                            <span>{{ $sixth_date_result->trifecta_first }}</span>
                            <span>{{ $sixth_date_result->trifecta_second }}</span>
                            <span>{{ $sixth_date_result->trifecta_third }}</span>
                            <span>{{ number_format($sixth_date_result->trifecta_refund_price, 0) }}円</span>
                            <span>{{ $sixth_date_result->trifecta_rank }}番人気</span>
                        </td>
                        <td>
                            <span>{{ $sixth_date_result->exacta_first }}</span>
                            <span>{{ $sixth_date_result->exacta_second }}</span>
                            <span>{{ number_format($sixth_date_result->exacta_refund_price, 0) }}円</span>
                            <span>{{ $sixth_date_result->exacta_rank }}番人気</span>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <h2>レース集計</h2>
            <div class="race_aggregate">
                <div class="result_aggregate">
                </div>
                <div class="result_aggregate_detail">
                    <table>
                        <tr>
                            <th>号艇</th>
                            <th>1着率</th>
                            <th>2着率</th>
                            <th>3着率</th>
                            <th>2連率</th>
                            <th>3連率</th>
                        </tr>
                        <tr>
                            <th>1号艇</th>
                            <td>
                                <span>{{ $race_aggregate['one_boat']['one_boat_one_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['one_boat']['one_boat_one_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['one_boat']['one_boat_two_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['one_boat']['one_boat_two_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['one_boat']['one_boat_three_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['one_boat']['one_boat_three_arrival'] }}%</span>
                            </td>
                            <td><span>{{ $race_aggregate['one_boat']['one_boat_two_continuous'] }}%</span></td>
                            <td><span>{{ $race_aggregate['one_boat']['one_boat_three_continuous'] }}%</span></td>
                        </tr>
                        <tr>
                            <th>2号艇</th>
                            <td>
                                <span>{{ $race_aggregate['two_boat']['two_boat_one_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['two_boat']['two_boat_one_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['two_boat']['two_boat_two_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['two_boat']['two_boat_two_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['two_boat']['two_boat_three_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['two_boat']['two_boat_three_arrival'] }}%</span>
                            </td>
                            <td><span>{{ $race_aggregate['two_boat']['two_boat_two_continuous'] }}%</span></td>
                            <td><span>{{ $race_aggregate['two_boat']['two_boat_three_continuous'] }}%</span></td>
                        </tr>
                        <tr>
                            <th>3号艇</th>
                            <td>
                                <span>{{ $race_aggregate['three_boat']['three_boat_one_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['three_boat']['three_boat_one_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['three_boat']['three_boat_two_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['three_boat']['three_boat_two_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['three_boat']['three_boat_three_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['three_boat']['three_boat_three_arrival'] }}%</span>
                            </td>
                            <td><span>{{ $race_aggregate['three_boat']['three_boat_two_continuous'] }}%</span></td>
                            <td><span>{{ $race_aggregate['three_boat']['three_boat_three_continuous'] }}%</span></td>
                        </tr>
                        <tr>
                            <th>4号艇</th>
                            <td>
                                <span>{{ $race_aggregate['four_boat']['four_boat_one_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['four_boat']['four_boat_one_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['four_boat']['four_boat_two_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['four_boat']['four_boat_two_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['four_boat']['four_boat_three_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['four_boat']['four_boat_three_arrival'] }}%</span>
                            </td>
                            <td><span>{{ $race_aggregate['four_boat']['four_boat_two_continuous'] }}%</span></td>
                            <td><span>{{ $race_aggregate['four_boat']['four_boat_three_continuous'] }}%</span></td>
                        </tr>
                        <tr>
                            <th>5号艇</th>
                            <td>
                                <span>{{ $race_aggregate['five_boat']['five_boat_one_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['five_boat']['five_boat_one_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['five_boat']['five_boat_two_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['five_boat']['five_boat_two_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['five_boat']['five_boat_three_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['five_boat']['five_boat_three_arrival'] }}%</span>
                            </td>
                            <td><span>{{ $race_aggregate['five_boat']['five_boat_two_continuous'] }}%</span></td>
                            <td><span>{{ $race_aggregate['five_boat']['five_boat_three_continuous'] }}%</span></td>
                        </tr>
                        <tr>
                            <th>6号艇</th>
                            <td>
                                <span>{{ $race_aggregate['six_boat']['six_boat_one_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['six_boat']['six_boat_one_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['six_boat']['six_boat_two_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['six_boat']['six_boat_two_arrival'] }}%</span>
                            </td>
                            <td>
                                <span>{{ $race_aggregate['six_boat']['six_boat_three_arrival_count'] }}回</span>
                                <span>{{ $race_aggregate['six_boat']['six_boat_three_arrival'] }}%</span>
                            </td>
                            <td><span>{{ $race_aggregate['six_boat']['six_boat_two_continuous'] }}%</span></td>
                            <td><span>{{ $race_aggregate['six_boat']['six_boat_three_continuous'] }}%</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>