<div class="col-md-12">
    <h2>Countries list and its internet codes</h2>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th class="col-sm-3">#</th>
            <th class="col-sm-9">Country internet code and name</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($aCountries as $aCountry)
                <tr>
                    <td class="col-sm-3">
                        {{ $aCountry['id'] }}
                    </td>
                    <td class="col-sm-9">
                        {{ $aCountry['formattedRecord'] }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>