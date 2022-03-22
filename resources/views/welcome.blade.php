<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    @stack('css')
    <title>Dev.finance$</title>
  </head>
  <body>
    <header>
      <img src="{{ url('img/logo.svg') }}" alt="Logo Dev.finance">
    </header>

    <main class="container">
      <section id="balance">
        <h2 class="sr-only">Balanço</h2>
        <div class="card">
            <h3>
              <span>Entradas</span>
             <img src="{{ url('img/income.svg') }}" alt="Image de entradas">
            </h3>
            <p id="incomeDisplay">R$ 0,00</p>
        </div>

        <div class="card">
          <h3>
            <span>Saídas</span>
            <img src="{{ url('img/expense.svg') }}" alt="Image de saidas">
          </h3>
            <p id="expenseDisplay">R$ 0,00</p>
        </div>

        <div class="card total">
          <h3>
            <span>Total</span>
            <img src="{{ url('img/total.svg') }}" alt="Image de total">
          </h3>

            <p id="totalDisplay">R$ 0,00</p>
        </div>
      </section>

      <section id="transaction">
            <h2 class="sr-only">Transações</h2>
            <a href="#"  class="button new" onclick="Modal.open()">+ Nova Transação</a>
        <table id="data-table">
          <thead>
            <tr>
              <th>Descrição</th>
              <th>Valor</th>
              <th>Data</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </section>
    </main>


    <div class="modal-overlay">
      <div class="modal">
        <div id="form">
          <h2>Nova Transação</h2>
          <form action="" onsubmit="Form.submit(event)">

              <div class="input-group">
                <label class="sr-only" for="description">Descrição</label>
                <input type="text" id="description" name="description" placeholder="Descrição">
              </div>

              <div class="input-group">
                <label class="sr-only" for="amount">Valor</label>
                <input type="number" step="0.01" id="amount" name="amount" placeholder="0,00">
                <small class="help">Use o sinal - (negativo) para despesas e , (vírgula) para casas decimais</small>
              </div>

              <div class="input-group">
                <label class="sr-only" for="date">Data</label>
                <input type="date" id="date" name="date" placeholder="Data">
              </div>

              <div class="input-group actions">
                <a href="#" onclick="Modal.close()" class="button cancel">Cancelar</a>
                <button>Salvar</button>
              </div>

          </form>
        </div>
      </div>
    </div>

    <footer>
      <p>Dev.finance$</p>
      <strong>Victor Soles</strong>
    </footer>

    <script src="./jsp/script.js"></script>
  </body>
</html>
