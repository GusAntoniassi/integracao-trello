FORMAT: 1A

# Integração Trello

API para integrar a tela de sprints do CCG com o Trello.

# Group Sprints
Cada sprint terá seu próprio quadro no Trello, que será vinculado ao time daquele projeto.

## /sprints [/sistema/{sistema_id}/sprints]

+ Parameters
	+ sistema_id: 21 - ID do sistema no CCG

### Listar sprints [GET]
Retornará todos os quadros do Trello relacionados às sprints daquele time.
	
+ Response 200 (application/json)

		{
			"???": "????",
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Time não encontrado"
		}
		
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao consultar as sprints"
		}
		
### Criar sprint [POST]
Criará um novo quadro no Trello, que será adicionado ao time vinculado ao `idsistema` passado no corpo da requisição. 

**NOTA:** Se o time não for encontrado ele será criado automaticamente.

+ Request Exemplo (application/json)

		{
			"idsprint": "16"
		}
	
+ Response 200 (application/json)

		{
			"status": "sucesso",
			"mensagem": "Sprint criada com sucesso"
		}
		
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao criar a sprint"
		}
		
## /sprint [/sistema/{sistema_id}/sprint/{sprint_id}]


+ Parameters
	+ sistema_id: 21 - ID do sistema no CCG
	+ sprint_id: 16 (integer) - ID da sprint no CCG

### Buscar sprint [GET]
Retornará os detalhes do quadro no Trello.
	
+ Response 200 (application/json)

		{
			"???": "????",
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Sprint não encontrada"
		}
			
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao buscar a sprint"
		}
		
	
### Editar sprint [PUT]
Editará o quadro no Trello.

+ Request Exemplo (application/json)

		{
			"nome": "Sprint 0 - Entrega 1"
		}
	
+ Response 200 (application/json)

		{
			"status": "sucesso",
			"mensagem": "Sprint alterada com sucesso"
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Sprint não encontrada"
		}
			
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao alterar a sprint"
		}
		
	
### Excluir sprint [DELETE]
Removerá o quadro do Trello.
	
+ Response 204		

# Group Estórias
Cada estória será representada por um cartão no quadro do time no Trello.

## /estorias [/sistema/{sistema_id}/sprint/{sprint_id}/estorias]

+ Parameters
	+ sistema_id: 21 - ID do sistema no CCG
	+ sprint_id: 16 - ID da sprint no CCG

### Listar estórias [GET]
Retornará todos os quadros do Trello relacionados às sprints daquele time.
	
+ Response 200 (application/json)

		{
			"???": "????",
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Sprint não encontrada"
		}
		
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao consultar as sprints"
		}
		
### Criar estória [POST]
Criará um novo quadro no Trello, que será adicionado ao time vinculado ao `idsistema` passado no corpo da requisição.

**NOTA:** Será criada automaticamente uma checklist chamada "Tarefas" dentro do cartão.

+ Request Exemplo (application/json)

		{
			"idestoria": "209",
			"nome": "(Front-end) Ajustes layout (12h)"
		}
	
+ Response 200 (application/json)

		{
			"status": "sucesso",
			"mensagem": "Estória criada com sucesso"
		}
		
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao criar a estória"
		}
		
## /estoria [/sistema/{sistema_id}/sprint/{sprint_id}/estoria/{estoria_id}]


+ Parameters
	+ sistema_id: 21 - ID do sistema no CCG
	+ sprint_id: 16 (integer) - ID da sprint no CCG
	+ estoria_id: 129 (integer) - ID da estória no CCG

### Buscar estória [GET]
Retornará os detalhes do cartão no Trello.
	
+ Response 200 (application/json)

		{
			"???": "????"
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Estória não encontrada"
		}
			
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao buscar a estória"
		}
		

### Editar estória [PUT]
Editará o cartão no Trello.

+ Request Exemplo (application/json)

		{
			"nome": "(Front-end) Ajustes layout (10h)"
		}
	
+ Response 200 (application/json)

		{
			"status": "sucesso",
			"mensagem": "Estória alterada com sucesso"
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Estória não encontrada"
		}
			
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao alterar a estória"
		}
		
	
### Excluir estória [DELETE]
Arquivará o cartão no Trello.
	
+ Response 204		

# Group Tarefas

Recursos relacionados à manutenção de tarefas na API.

## /tarefas [/sistema/{sistema_id}/sprint/{sprint_id}/estoria/{estoria_id}/tarefas]

+ Parameters
	+ sistema_id: 21 - ID do sistema no CCG
	+ sprint_id: 16 - ID da sprint no CCG
	+ estoria_id: 129 - ID da estória no CCG

### Listar tarefas [GET]
Retornará todos os itens da checklist "Tarefas" no cartão correspondente à estória.
	
+ Response 200 (application/json)

		{
			"???": "????",
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Estória não encontrada"
		}
		
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao consultar as estórias"
		}
		
### Criar tarefa [POST]
Criará um item na checklist "Tarefas" no cartão correspondente à estória.

+ Request Exemplo (application/json)

		{
			"idtarefa": "1666",
			"descricao": "Deixar botões em negrito",
			"previsaohoras": "4"
		}
	
+ Response 200 (application/json)

		{
			"status": "sucesso",
			"mensagem": "Tarefa criada com sucesso"
		}
		
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao criar a tarefa"
		}
		
## /tarefa [/sistema/{sistema_id}/sprint/{sprint_id}/estoria/{estoria_id}/tarefa/{tarefa_id}]


+ Parameters
	+ sistema_id: 21 - ID do sistema no CCG
	+ sprint_id: 16 (integer) - ID da sprint no CCG
	+ estoria_id: 129 (integer) - ID da estória no CCG
	+ tarefa_id: 1666 (integer) - ID da tarefa no CCG
	
### Buscar tarefa [GET]
Retornará os detalhes do item da checklist no Trello.

+ Response 200 (application/json)

		{
			"???": "????"
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Tarefa não encontrada"
		}
			
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao buscar a tarefa"
		}
		
	
### Editar tarefa [PUT]
Editará o item da checklist no Trello.

+ Request Exemplo (application/json)

		{
			"descricao": "Deixar botões em semibold",
			"previsaohoras": 3
		}
	
+ Response 200 (application/json)

		{
			"status": "sucesso",
			"mensagem": "Tarefa alterada com sucesso"
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Tarefa não encontrada"
		}
			
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao alterar a tarefa"
		}
		
	
### Excluir tarefa [DELETE]
Excluirá o item da checklist no Trello.
	
+ Response 204		


# Group Sistemas

Cada sistema terá um time no trello, e todas as sprints serão quadros vinculados àquele time.

## /sistemas [/sistemas]

### Listar sistemas [GET]
Retornará todos times cadastrados na API.
	
+ Response 200 (application/json)

		{
			"???": "????",
		}
		
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao consultar os times"
		}
		
### Criar sistema [POST]
Criará um time no Trello vinculado ao sistema.

+ Request Exemplo (application/json)

		{
			"idsistema": "21",
			"nome": "B2B Atacado"
		}
	
+ Response 200 (application/json)

		{
			"status": "sucesso",
			"mensagem": "Time criado com sucesso"
		}
		
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao criar o time"
		}
		
## /sistema [/sistema/{sistema_id}]


+ Parameters
	+ sistema_id: 21 - ID do sistema no CCG

### Buscar sistema [GET]
Retornará os detalhes do time no Trello.

+ Response 200 (application/json)

		{
			"???": "????"
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Time não encontrado"
		}
			
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao buscar o time"
		}
		
	
### Editar sistema [PUT]
Editará o time no Trello.

+ Request Exemplo (application/json)

		{
			"nome": "B2C Atacado"
		}
	
+ Response 200 (application/json)

		{
			"status": "sucesso",
			"mensagem": "Time alterado com sucesso"
		}
		
+ Response 404 (application/json)

		{
			"status": "erro",
			"mensagem": "Time não encontrado"
		}
			
+ Response 500 (application/json)

		{
			"status": "erro",
			"mensagem": "Erro ao alterar o time"
		}
		
	
### Excluir time [DELETE]
Excluirá o time no Trello, excluindo também todos os quadros vinculados a ele.
	
+ Response 204		