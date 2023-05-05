<!DOCTYPE html>

<head lang="pt_br">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF</title>
</head>

<style>
  body {
    padding: 0px 10px;
  }

  .bg-grey {
    background-color: #ccc !important;
  }

  .border-grey {
    border: 1px solid #ccc;
  }

  .border-black {
    border: 1px solid #000;
    height: 10px;
  }

  .border-left {
    border-left: 1px solid #ccc;
  }

  .border-right {
    border-right: 1px solid #000;
  }

  .border-bottom {
    border-bottom: 1px solid black;
  }

  .td-title {
    font-size: 22px;
    padding: 18px 0px;
    font-weight: bold;
  }

  table {
    width: 100% !important;
    border: 1px solid #000 !important;
    padding: 0px !important;
    margin: 0px;
    border-collapse: collapse;
  }

  thead {
    margin: 0px;
  }

  tbody {
    margin: 0px;
  }

  thead tr {
    padding: 0px;
  }

  thead tr th {
    border: 1px solid #000;
    text-align: center;
    margin: 0px !important;
  }

  .td-logotipo {
    width: 150px !important;
  }

  .img-logotipo {
    width: 100px;
    margin: 0 auto;
  }

  table tbody tr {
    padding: 10px;
  }

  table tbody tr td.td-subtitle {
    text-align: center;
    padding: 4px 0px;
    font-size: 17px;
    border-bottom: 1px solid #000;
    font-weight: bold;
  }

  .text-center {
    text-align: center;
  }

  .margin-10 {
    margin: 10px;
  }

  .bloco-descricao {
    margin: 5px;
    border: 1px solid #000;
    padding: 2px;
    font-weight: bold;
  }

  .td-registro-fotografico {
    height: 250px;
  }

  .tr-plano-acao td {
    height: 20px;
  }

  .text-bold {
    font-weight: bold;
  }

  .area-empresas {
    width: 100% !important;
    margin: 0px;
    padding: 10px;
  }

  .area-empresas {
    display: flex;
    flex-wrap: wrap;
  }

  .area-empresas .area-empresas-item {
    font-weight: bold;
    font-size: 15px;
    box-sizing: border-box;
    width: 245px;
    text-align: left;
    margin-right: 20px;
  }

  @media print {
    #sizer {
      width: auto;
    }

    body {
      padding: 10px;
    }

    table {
      width: 100% !important;
      border: solid #000 !important;
      border-width: 1px 0 0 1px !important;
    }

    th,
    td {
      border: solid #000 !important;
      border-width: 1px 1px 1px 1px !important;
    }

    .bg-grey {
      background-color: #ccc !important;
      -webkit-print-color-adjust: exact;
    }

    .area-empresas .area-empresas-item {
      font-size: 14px !important;
      box-sizing: border-box;
      width: 226px !important;
      text-align: left;
      padding-right: 0px !important;
      margin-right: 0px !important;
    }

  }
</style>

<body>
  <table>
    <!-- Head -->
    <thead>
      <tr>
        <th class="td-logotipo">
          <img class="img-logotipo" src="https://cdns1.2rscms.com.br/custom/553/uploads/clientes/zilor.png">
        </th>
        <th colspan="12" class="td-title">RELATÓRIO DE INVESTIGAÇÃO DE OCORRÊNCIA</th>
      </tr>
    </thead>
    <!-- ./ head -->

    <tbody class="border-right-black-print">
      <tr class="border-black">
        <td colspan="12"></td>
      </tr>

      <tr class="bg-grey">
        <td colspan="12" class="td-subtitle">EMPRESA</td>
      </tr>
      <tr>
        <td colspan="12">
          <div class="area-empresas">
            <?php foreach ($empresas as $id => $empresa) { ?>
              <div class="area-empresas-item">
                <label for="empresa<?php echo $id ?>">
                  <?php echo form_checkbox(
                    array(
                      "id" => "empresa{$id}",
                    ),
                    '',
                    !empty($id) && $id == $empresa_id
                  ); ?>
                  <?php echo strtoupper($empresa) ?>
                </label>
              </div>
            <?php } ?>
          </div>
        </td>
      </tr>

      <tr class="bg-grey border-black">
        <td colspan="4" class="td-subtitle border-right">
          TIPO DE EVENTO
        </td>
        <td colspan="4" class="td-subtitle border-right">
          POTENCIAL DO QUASE ACIDENTE
        </td>
        <td colspan="3" class="td-subtitle">
          NÍVEL DE GRAVIDADE
        </td>
      </tr>

      <tr>
        <td colspan="4" class="border-right">
          <label for="td-checkbox-tipo-1">
            <?php echo form_checkbox(['class' => 'td-checkbox-tipo', 'name' => 'tipo', 'id' => 'td-checkbox-tipo-1'], '', true); ?>
            Quase Acidente
          </label>
        </td>
        <td colspan="4" class="border-right">
          <label for="td-checkbox-potencial-1">
            <?php echo form_checkbox(['class' => 'td-checkbox-potencial', 'name' => 'tipo', 'id' => 'td-checkbox-potencial-1']); ?>
            Danos Patrimoniais
          </label>
        </td>
        <td colspan="3" class="text-center">
          <label for="td-checkbox-nivel-1">
            1 - <?php echo form_checkbox(['class' => 'td-checkbox-nivel', 'name' => 'tipo', 'id' => 'td-checkbox-nivel-1']); ?>
          </label>
        </td>
      </tr>

      <tr>
        <td colspan="4" class="border-right">
          <label for="td-checkbox-tipo-2">
            <?php echo form_checkbox(['class' => 'td-checkbox-tipo', 'name' => 'tipo', 'id' => 'td-checkbox-tipo-2']); ?>
            Acidente com Danos Patrimoniais
          </label>
        </td>
        <td colspan="4" class="border-right">
          <label for="td-checkbox-potencial-2">
            <?php echo form_checkbox(['class' => 'td-checkbox-potencial', 'name' => 'tipo', 'id' => 'td-checkbox-potencial-2']); ?>
            Danos Pessoais
          </label>
        </td>
        <td colspan="3" class="text-center">
          <label for="td-checkbox-nivel-2">
            <!-- Exemplo no code nano -->
            <?php /*echo form_group(
              '2-',
              'form_checkbox',
              array(
                'class' => 'td-checkbox-nivel',
                'name' => 'tipo',
                'id' => 'td-checkbox-nivel-2',
                'checked' => comparação,
                'value' => ''
              ),
            ); */ ?>
            <!-- ./exemplo -->

            2 - <?php echo form_checkbox(['class' => 'td-checkbox-nivel', 'name' => 'tipo', 'id' => 'td-checkbox-nivel-2'], '', true); ?>
          </label>
        </td>
      </tr>

      <tr>
        <td colspan="4" class="border-right">
          <label for="td-checkbox-tipo-3">
            <?php echo form_checkbox(['class' => 'td-checkbox-tipo', 'name' => 'tipo', 'id' => 'td-checkbox-tipo-3']); ?>
            Acidente com Impacto Ambiental
          </label>
        </td>
        <td colspan="4" class="border-right">
          <label for="td-checkbox-potencial-3">
            <?php echo form_checkbox(['class' => 'td-checkbox-potencial', 'name' => 'tipo', 'id' => 'td-checkbox-potencial-3'], '', true); ?>
            Impacto Ambiental
          </label>
        </td>
        <td colspan="3" class="text-center">
          <label for="td-checkbox-nivel-3">
            3 - <?php echo form_checkbox(['class' => 'td-checkbox-nivel', 'name' => 'tipo', 'id' => 'td-checkbox-nivel-3']); ?>
          </label>
        </td>
      </tr>

      <tr class="border-black bg-grey">
        <td colspan="12" class="td-subtitle">DADOS DO ACIDENTE</td>
      </tr>

      <tr class="">
        <td colspan="12">

          <div class="bloco-descricao">
            DATA: <span> </span>
          </div>

        </td>
      </tr>
      <tr class="">
        <td colspan="12">
          <div class="bloco-descricao">
            HORÁRIO: <span> </span>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="12">
          <div class="bloco-descricao">
            LOCAL DO ACIDENTE / QUASE ACIDENTE: <span> </span>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="12">
          <div class="bloco-descricao">
            TURNO: <span> </span>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="12">
          <div class="bloco-descricao">
            ÁREA: <span> </span>
          </div>
        </td>
      </tr>

      <tr class="bg-grey border-black">
        <td colspan="12" class="td-subtitle">DESCRIÇÃO DO EVENTO</td>
      </tr>
      <td colspan="12">
        <?php echo form_textarea(['name' => 'descricao', 'class' => 'bloco-descricao', 'style' => 'width: 98%;']) ?>
      </td>

      <tr class="bg-grey border-black">
        <td colspan="12" class="td-subtitle">ANÁLISE DO LOCAL</td>
      </tr>
      <tr>
        <td colspan="12">
          <?php echo form_textarea(['name' => 'analise', 'class' => 'bloco-descricao', 'rows' => '4', 'style' => 'width: 98%;']) ?>
        </td>
      </tr>
      <!-- 
      <tr>
        <td>CAUSAS</td>
      </tr>

      <tr>
        <td>DESCRIÇÃO ESPECÍFICA</td>
      </tr> -->

      <tr class="bg-grey border-black">
        <td colspan="12" class="td-subtitle">AÇÕES IMEDIATAS</td>
      </tr>

      <tr>
        <td colspan="12" style="padding: 10px">
          <table style="border: none !important; width: 100%;">
            <tr class="text-center">
              <td colspan="1" class="border-black">SITUAÇÃO EXISTENTE</td>
              <td colspan="1" class="border-black" style="width: 200px;">AÇÃO</td>
              <td colspan="1" class="border-black">RESPONSÁVEL</td>
              <td colspan="1" class="border-black">STATUS</td>
            </tr>
            <tr class="text-center">
              <td colspan="1" class="border-black">Texto</td>
              <td colspan="1" class="border-black" style="width: 200px;">Texto</td>
              <td colspan="1" class="border-black">Texto</td>
              <td colspan="1" class="border-black">Concluído<br>Em Andamento</td>
            </tr>
            <tr class="text-center">
              <td colspan="1" class="border-black" style="height: 40px;"></td>
              <td colspan="1" class="border-black" style="height: 40px;width: 200px;"></td>
              <td colspan="1" class="border-black" style="height: 40px;"></td>
              <td colspan="1" class="border-black" style="height: 40px;"></td>
            </tr>
          </table>
          </div>
        </td>
      </tr>

      <tr class="bg-grey border-black">
        <td colspan="12" class="td-subtitle">
          REGISTROS FOTOGRÁFICOS
        </td>
      </tr>
      <tr>
        <td colspan="12" style="padding: 10px">
          <table style="border: none !important; width: 100%;">
            <tr class="text-center">
              <td colspan="6" class="border-black td-registro-fotografico"></td>
              <td colspan="6" class="border-black td-registro-fotografico"></td>
            </tr>
          </table>
          </div>
        </td>
      </tr>

      <tr class="bg-grey border-black">
        <td colspan="12" class="td-subtitle">PLANO DE AÇÃO</td>
      </tr>

      <tr>
        <td colspan="12" style="padding: 10px">
          <table style="border: none !important; width: 100%;">
            <tr class="text-center tr-plano-acao text-bold">
              <td colspan="3" class="border-black">AÇÃO</td>
              <td colspan="4" class="border-black">RESPONSÁVEL</td>
              <td colspan="3" class="border-black">PRAZO</td>
            </tr>
            <tr class="text-center tr-plano-acao">
              <td colspan="3" class="border-black">Texto</td>
              <td colspan="4" class="border-black">Texto</td>
              <td colspan="3" class="border-black">Texto</td>
            </tr>
            <tr class="text-center tr-plano-acao">
              <td colspan="3" class="border-black"></td>
              <td colspan="4" class="border-black"></td>
              <td colspan="3" class="border-black"></td>
            </tr>
            <tr class="text-center tr-plano-acao">
              <td colspan="3" class="border-black"></td>
              <td colspan="4" class="border-black"></td>
              <td colspan="3" class="border-black"></td>
            </tr>
          </table>
          </div>
        </td>
      </tr>

      <tr class="bg-grey border-black">
        <td colspan="12" class="td-subtitle">RESPONSÁVEL PELA ELABORAÇÃO</td>
      </tr>
      <tr>
        <td colspan="12" style="padding: 10px">
          <table style="border: none !important; width: 100%;">
            <tr class="text-center tr-plano-acao text-bold">
              <td colspan="6" class="border-black">NOME</td>
              <td colspan="3" class="border-black">FUNÇÃO</td>
              <td colspan="3" class="border-black">ÁREA</td>
            </tr>
            <tr class="text-center tr-plano-acao">
              <td colspan="6" class="border-black"></td>
              <td colspan="3" class="border-black"></td>
              <td colspan="3" class="border-black"></td>
            </tr>
          </table>
          </div>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>