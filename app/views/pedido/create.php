
<div class="">
					<div class="width-100 d-flex">
						<div class="divisor border-bottom">
							<span class="titulo px-0"><i class="fab fa-wpforms"></i> dados do pedido</span>
							<form>
								<div class="rows mt-3">
									<div class="col-4 d-flex">
										<div class="cx">	
											<label class="text-label"><i class="fas fa-user"></i> Nome do cliente</label>
											<span class="h6 mb-0">Manoel jailton sousa do nascimento</span>
										</div>
									</div>
									<div class="col d-flex">
										<div class="cx">	
											<label class="text-label"><i class="fas fa-calendar"></i> Data</label>
											<span class="h6 mb-0">29/11/2019</span>
										</div>
									</div>
									<div class="col d-flex">
										<div class="cx">	
											<label class="text-label"><i class="far fa-clock"></i> Hora</label>
											<span class="h6 mb-0">09:04:25</span>
										</div>
									</div>
									<div class="col d-flex">
										<div class="cx">	
											<label class="text-label"><i class="fas fa-dollar-sign"></i> Valor</label>
											<span class="h6 mb-0">09:04:25</span>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="d-flex">
						<div class="base-home pt-3">
							<span class="titulo pb-3 pt-3"><i class="far fa-list-alt"></i> Itens do pedido</span>
							<div class="formulario">
								<form action="">
									<div class="rows p-3">
										<div class="col-6 position-relative">
											<div class="d-flex  text-justify-between items-center">
												<span class="text-label"> Produto (<a href="javascript:;" onclick="abrirModal('#janela')" class="text-roxo">Buscar</a>)</span>
												
											</div>
												<input type="text" id="produto" data-type="localizar_produto" class="form-campo" />
												
											</div>
										<div class="col-2">
											<span class="text-label">Quantidade</span>
											<input type="number" value="1" class="form-campo">
										</div>
										<div class="col-2">
											<span class="text-label">Valor</span>
											<input type="text" value="100,00" class="form-campo">
										</div>
										<div class="col-2 mt-3 pt-2">
											<input type="submit" value="Inserir" class="btn btn-azul width-100">
										</div>
									</div>
								</form>
								
							</div>
								<div class="tabela-responsiva">
									<div class="border-bottom-0">
										<table cellpadding="0" cellspacing="0" id="dataTable">
											<thead>
												<tr>
													<th width="2%" align="left">Item</th>
													<th width="2%" align="left">Id</th>
													<th width="48%" align="left">Produto</th>
													<th width="16%" align="center">Preço</th>
													<th width="8%" align="center">Quantidade</th>							
													<th width="15%" align="center">Subtotal</th>
													<th width="15%" align="center">Excluir</th>
												</tr>
											</thead>
											<tbody>
												<tr class="ativo">
													<td>1</td>
													<td>1</td>
													<td>Café350g</td>
													<td align="center">R$ 3.00</td>
													<td align="center">1</td>
													<td align="center">R$ 3</td>
													<td align="center"><a href="index.php?link=3&amp;del=S&amp;i=59" class="btn btn-outline-vermelho">Excluir</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="text-right pt-3 base-botoes">
									<a href="" class="btn btn-vermelho d-inline-block"><i class="fas fa-times"></i> Cancelar</a>
									<a href="" class="btn d-inline-block"><i class="fas fa-check"></i> Finalizar</a>
								</div>
						</div>
					</div>
				</div>