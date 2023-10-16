# 🌐 Projeto Web

Projeto Web para a disciplina de Redes de Computadores, 2sem/2023 na Unifesp. \
[Parte 2 - Configuração NAT](/configuracao-NAT.md)

## Alunos
Yasmin Beatriz Deodato

## Instalação
```bash
sudo apt install apache2
sudo apt install php libapache2-mod-php
```
Reiniciar para aplicar mudanças
```bash
sudo systemctl restart apache2
```

![Instalação com sucesso](/images/image01.png)

## Comandos para Execução
Iniciar Apache:

```bash
sudo systemctl start apache2
```

Verificar status:
```bash
sudo systemctl status apache2
```
Acessar `http://localhost/` temos a seguinte visualização:
![Acessar Servidor](/images/image02.png)

## Prévia de Visualização
No diretório `var/www/html` foi criada uma pasta `/aplicacao` e incluso o arquivo [index.php](/index.php). E podemos observar a seguinte página web com os conteúdos dinâmicos:

![Prévia de Visualização da Aplicação](/images/image03.png)