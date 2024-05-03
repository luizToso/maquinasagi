




                // Função que monta Mês, Dia, e Ano para exibir no HTML

                // Declaração de Variaveis que receberam os valores:
                var now = new Date();

                var hours = now.getHours();

                var minutes = now.getMinutes();

                var timeValue = "" + ((hours >12) ? hours -12 :hours)

                //Tratamento quantidade de Digitos nos Minutos e exibi se é

                // dia ou noite, PM, AM

                timeValue += ((minutes < 10) ? ":0" : ":") + minutes

                timeValue += (hours >= 12) ? " PM" : " AM"

                timerRunning = true;

                mydate = new Date();

                myday = mydate.getDay();

                mymonth = mydate.getMonth();

                myweekday = mydate.getDate();

                weekday = myweekday;

                myyear = mydate.getYear();

                year = myyear;

                // Tratamento dos Dias da Semana

                if(myday == 0)

                               day = " Domingo, "

                else if(myday == 1)

                               day = " Segunda Feira, "

                else if(myday == 2)

                               day = " Terça Feira, "

                else if(myday == 3)

                               day = " Quarta Feira, "

                else if(myday == 4)

                               day = " Quinta Feira, "

                else if(myday == 5)

                               day = " Sexta Feira, "

                else if(myday == 6)

                               day = " Sábado, "

                //Tratamento dos Meses

                if(mymonth == 0)

                               month = " de Janeiro  "

                else if(mymonth ==1)

                               month = " de Fevereiro  "

                else if(mymonth ==2)

                               month = " de Março  "

                else if(mymonth ==3)

                               month = " de April  "

                else if(mymonth ==4)

                               month = " de Maio  "

                else if(mymonth ==5)

                               month = " de Junho  "

                else if(mymonth ==6)

                               month = " de Julho  "

                else if(mymonth ==7)

                               month = " de Agosto  "

                else if(mymonth ==8)

                               month = " de Setembro  "

                else if(mymonth ==9)

                               month = " de Outubro  "

                else if(mymonth ==10)

                               month = " de Novembro  "

                else if(mymonth ==11)

                               month = " de Dezembro  "

                //Exibe na Pagina o Resultado concatenando(+) os valores

 

                document.write( day + myweekday + month + " - " + timeValue);

                setTimeout(function() {
  window.location.reload(1);
}, 10000); // 3 minutos


