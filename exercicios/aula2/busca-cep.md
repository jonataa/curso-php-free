# Buscar endereço através do CEP
Sendo um entregador de pizza, posso buscar o endereço do cliente através do CEP informado por telefone, pois assim ganho agilidade e realizo as entregas corretamente.

Cenário 1: Buscar endereço, CEP válido.  
Dado que estou na página buscar endereço  
Quando insiro um CEP VÁLIDO no campo do formulário  
Então ele exibe o endereço correspondente.  

Cenário 2: Buscar endereço, CEP inválido.  
Dado que estou na página buscar endereço  
Quando insiro um CEP INVÁLIDO no campo do formulário  
Então ele exibe a mensagem "CEP inválido!".  

Utilizar uma das APIs abaixo:
* http://avisobrasil.com.br/correio-control/api-de-consulta-de-cep/ (utilizamos essa na sala)
* https://viacep.com.br/
