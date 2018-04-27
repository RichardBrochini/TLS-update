### Python

#### Requisitos

- Python usa o OpenSSL fornecida pelo sistema.
- TLS 1.2 precisa da versão 1.0.1c OpenSSL ou superior.

#### Testando sua conexão com TLS 1.2.

1. Baixe [esse arquivo](Python/tls-example.py) em seu servidor.

2. Execute-o arquivo com o comando `python tls-example.py`

	* Em caso de sucesso, a seguinte mensagem será retornada:
	```
	Sucesso: sua conexão com a Pagar.me está utilizando o protocolo TLS 1.2.
	```

	* Em caso de falha, a seguinte mensagem será exibida:
	```
	Sua versão SSL é XXX
	Sua versão deve ser superior à 1.0.1c
	```
* * *

### .NET

#### . Requisitos para .NET
Para habilitar o funcionamento do protocolo TLSv1.2 em seu sistema, a única coisa necessária é utilizar a versão mais recente do Mono(linux) ou .NET Framework (4.5 ou maior).

#### Verificando suas versões de .NET e TLS

1. Execute o arquivo `tls-example.exe`, que pode ser encontrado clicando [aqui](https://github.com/pagarme/TLS-update/blob/master/C%23/):
##### Windows:
        Execute o arquivo como qualquer outro `.exe` normalmente.

##### Linux:
        Execute o comando a partir do `mono` da seguinte maneira:
        ```
          $ mono tls-example.exe
        ```
          * Caso a requisição retorne sucesso, a seguinte mensagem será exibida em seu terminal:
          ```
            "Sucesso: sua conexão com a Pagar.me está utilizando o protocolo TLS 1.2."
          ```

#### Links:
  - [Exemplo completo](https://github.com/pagarme/TLS-update/tree/master/C%23)
