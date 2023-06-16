<?php

namespace Julio\Projeto\Infra\Relatorios;

interface ArquivosExportados
{
public function salvar(ConteudoExportado $conteudo) : string; 
}
