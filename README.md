# Aplicação do principio SOLID em php o famoso SINGLE RESPONSIBILITY PRINCIPLE
Uma classe deve ter uma única razão para mudar, significando que ela deve ser focada em realizar uma tarefa específica sem estar sobrecarregada com funcionalidades adicionais ou responsabilidades que pertençam a outras classes.

## Um código que não utiliza SRP ficaria da seguinte maneira:
Executaria a mesma função dentro de somente uma classe 
<img src="https://media.discordapp.net/attachments/1080477764458647552/1230592501472039075/image.png?ex=6633e193&is=66216c93&hm=ee5521ab12cb8df0bd9a2d849e31831e8d0fdafa05683e101870c5cc5aead216&=&format=webp&quality=lossless&width=666&height=643">

### Utilizando SOLID temos um código
- Modular e testável.
- Código limpo e de facil compreensão.
- se uma classe precisar ser alterada, apenas um aspecto do sistema será afetado, minimizando o impacto em outras partes do código.
