<div class="detail_gamagori">
    <h1>ボートレース蒲郡</h1>
    <div class="racename_gamagori">
        <h2>{{ $all_japan_68y_anniversary->grade }} {{ $all_japan_68y_anniversary->race_date }} {{ $all_japan_68y_anniversary->race_name }}</h2>
        <div class="result_gamagori">
            <table>
                <tr>
                    <th>R</th>
                    <th>3連単</th>
                    <th>2連単</th>
                </tr>
                @foreach ($race_data as $race_data)
                <tr>
                    <td>{{ $race_data->race_number }}</td>
                    <td>{{ $race_data->trifecta_first }}{{ $race_data->trifecta_second }}{{ $race_data->trifecta_third }} {{ $race_data->trifecta_refund_price }}円 {{ $race_data->trifecta_rank }}番人気</td>
                    <td>{{ $race_data->exacta_first }}{{ $race_data->exacta_second }} {{ $race_data->exacta_refund_price }}円 {{ $race_data->exacta_rank }}番人気</td>
                </tr>
                @endforeach
            </table>
        </div>
        <h2>レース集計</h2>
        <div class="race_aggregate">
            <div class="result_aggregate">
                <table>
                    <tr>
                        <th>集計結果(3連単)</th>
                    </tr>
                    <tr>
                        <th>終了R</th>
                        <td>72</td>
                    </tr>
                    <tr>
                        <th>一番人気</th>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th>万舟券</th>
                        <td>18</td>
                    </tr>
                    <tr>
                        <th>合計金額</th>
                        <td>644240円</td>
                    </tr>
                    <tr>
                        <th>平均</th>
                        <td>8948円</td>
                    </tr>
                </table>
            </div>
            <div class="result_aggregate_detail">
                <table>
                    <tr>
                        <th>号艇</th>
                        <th>1着集計</th>
                        <th>2連率</th>
                        <th>3連率</th>
                    </tr>
                    <tr>
                        <th>1号艇</th>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                    </tr>
                    <tr>
                        <th>2号艇</th>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                    </tr>
                    <tr>
                        <th>3号艇</th>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                    </tr>
                    <tr>
                        <th>4号艇</th>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                    </tr>
                    <tr>
                        <th>5号艇</th>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                    </tr>
                    <tr>
                        <th>6号艇</th>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                        <td>XX</td>
                        <td>XX%</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>