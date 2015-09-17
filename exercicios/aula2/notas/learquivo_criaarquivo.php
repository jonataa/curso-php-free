<?php
/**
 * Leia em http://php.net/manual/en/ref.filesystem.php para mais funções de manipulação de arquivos
 *
 * Você é o carinha da informática e recebeu a missão de criar um algoritmo para calcular as notas
 * dos alunos da faculdade que você trabalha.
 * A faculdade fornece aos professores um arquivo .csv, separado por ; (ponto-e-vírgula) no seguinte formato:
 * - A primeira linha são as colunas (Nome do aluno, Nota da 1a unidade, Nota da 2a unidade, Nota da 3a unidade)
 * - As linhas posteriores são os dados
 *
 * Para facilitar a vida do professor, ele precisará de um arquivo do tipo .txt no seguinte formato:
 * {nomeDoAluno} - Media: {mediaDoAluno} -> {resultado}
 * {resultado} é uma verificação básica se o aluno passou ou não.
 * Para verificar se passou, a faculdade exige do aluno uma média final de no mínimo 7.0
 *
 * Entrada:
 * Nome do Aluno;Nota 1a Unidade;Nota 2a Unidade;Nota 3a Unidade;
 * Huguinho;7.5;6.0;9.0;
 * Zezinho;8.5;8.0;2.0;
 * Luizinho;7.5;6.0;5.0;
 *
 * Saída:
 * Huguinho - Media: 7.5 -> Passou!
 * Zezinho - Media: 6.0 -> Perdeu!
 * Luizinho - Media: 6.2 -> Perdeu!
 */
