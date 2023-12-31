# 🗣️ Configuração NAT

Configuração NAT em continuidade do [*Projeto Web*](/README.md) para a disciplina de Redes de Computadores, 2sem/2023 na Unifesp. 


Para acessar o **Projeto Web** a partir de outro dispositivo na mesma rede é preciso configurar a rede para permitir a visualização do endereço desse projeto.

## Alunos
Yasmin Beatriz Deodato

📚 **O que é o NAT?**

A NAT significa Network Address Translation (Tradução de Endereços de Rede) foi projetada para conservar o endereço IP. Ela permite que as redes IP privadas que usam endereços IP não registrados se conectem à Internet. A NAT opera em um roteador, que geralmente conecta duas redes entre si e converte os endereços privados (não exclusivos globalmente) na rede interna em endereços legais, antes que os pacotes sejam encaminhados para outra rede. 

[Fonte - Cisco](https://www.cisco.com/c/pt_br/support/docs/ip/network-address-translation-nat/26704-nat-faq-00.html#toc-hId--1420991877)     


## Passo 1
Descobrir o IP local da aplicação web, através da execução do comando
```bash
ifconfig
```

## Passo 2
Acessar endereço do roteador da rede no navegador (http://192.168.15.1/, no caso da Vivo) e fazer o login com as credenciais do administrador do roteador.

## Passo 3
Procurar pela seção **Encaminhamento de Porta** e incluir uma nova regra.
No caso da Provedor Vivo, temos uma tela parecida com essa:
![Configuração Porta](/images/image04.png)

 É preciso se atentar aos campos:


| Campo | Descrição | Valor |
| :-----: | :----------: | :-------: |
| Porta de Origem | A porta que você deseja usar para acessar o servidor Apache no outro dispositivo | 8080 |
| IP de Destino | O endereço IP local do computador com a aplicação. | 192.168.15.51 |
| Porta de Destino | A porta em que o Servidor Apache está ouvindo | 8080 |
| Protocolo | Protocolo usado | TCP | 

Salve a nova regra de Encaminhamento de Porta.

## Passo 4
Agora basta descobrir qual é o IP público do seu roteador, para isso, é possível utilizar o site [https://www.whatismyip.com/](https://www.whatismyip.com/) e verificar o endereço de IP público. A partir de outro dispositivo conectado em outra rede, abra o navegador digite o endereço do IP público com a respectiva porta indicada anteriormente e você poderá visualizar a aplicação web. 
