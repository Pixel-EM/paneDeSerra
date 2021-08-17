
    let heads = ['RECEITA','CLIENTE','DATA','PREÇO DE CUSTO','PREÇO DE VENDA'];
    let headsDes = ['DESPESA', 'VENCIMENTO', 'VALOR'];
    
    let tableVen = document.querySelector('#tableVen');
    let tableDes = document.querySelector('#tableDes');

    function generateTableHead(table, data) {
      if(table == null) return;
        let thead = table.createTHead();
        let row = thead.insertRow();
        for (let key of data) {
          let th = document.createElement("th");
          let text = document.createTextNode(key);
          th.appendChild(text);
          row.appendChild(th);
        }
      }
      

      generateTableHead(tableVen, heads);
      generateTableHead(tableDes, headsDes);


      let addVenda = document.querySelector('#addVenda')
      let form = document.querySelector('#addVendaForm')

      let addDesp = document.querySelector('#addDespesa')
      let formDesp = document.querySelector('#addDespesaForm')
      
      if(addVenda === null || form === null){
        // PÁGINA DESPESA //
        addDesp.addEventListener('click', ()=> {
        formDesp.style.display == "none" || formDesp.style.display == ""  ? formDesp.style.display = 'block' : formDesp.style.display = 'none'
        })
      }
      else{
        // Mostra o input pra adicionar venda
        addVenda.addEventListener('click', ()=> {
          form.style.display == "none" || form.style.display == ""  ? form.style.display = 'flex' : form.style.display = 'none'
        })
      }









