<!DOCTYPE html>
<html lang="fr">
<head>
    <style>
        .fontStyle{
            font-size: 13px;
        }
        .fontBold {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
        }

        .tableData {
            table-layout:fixed;
            word-wrap: break-word; 
            overflow-wrap: break-word;
        }
    </style>
</head>
<body>

    <div>
        <table>
            <tr>
                <td class="fontStyle fontBold"> {{ $company->name }} </td>
            </tr>
            <tr>
                <td class="fontStyle"> {{ $company->email }}</td>
            </tr>
        </table>

        <table style="margin-left: 500px !important; margin-top: -100px !important;">
            <tr>
                <td class="fontStyle fontBold"> Commande n°{{ $command->id }} </td>
            </tr>
            <tr>
                <td class="fontStyle">Date creation : 
                    {{  Carbon\Carbon::parse($command->created_at)->format('d-m-Y') }}
                </td>
            </tr>
        </table>
    </div>

      <div style="margin-top: 30px; margin-left: 500px;">
        <table>
            <tr>
                <td class="fontStyle fontBold"> {{ $client->name }} </td>
            </tr>
            <tr>
                <td class="fontStyle">{{ $clientAddress->address }}</td>
            </tr>
            <tr>
                <td class="fontStyle">{{ $clientAddress->ville }}, {{ $clientAddress->postal_code }}</td>
            </tr>
            <tr>
                <td class="fontStyle">E-mail : {{ $client->email }}</td>
            </tr>
        </table>
    </div>

    <table style="margin-top: 45px !important; margin-left: 10px; width: 100%; padding: 0;" class="fontStyle tableData">
        <thead>
            <tr style="padding: 0;">
                <th style="border: 1px solid black;"> Produit </th>
                <th style="border: 1px solid black;"> Quantité </th>
                <th style="border: 1px solid black;"> Prix </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($collectionCommand as $commandProducts)
        <tr style="outline: 0;">
            <td style="border: 1px solid black; padding-left: 5px;"> {{ $commandProducts->product->name }}</td> 
            <td style="border: 1px solid black; padding-left: 5px;"> {{ $commandProducts->quantite }}</td> 
            <td style="border: 1px solid black; padding-left: 5px;"> {{ $commandProducts->product->price }}</td> 
           
        @endforeach
        </tbody>
    </table>

</body>
</html>