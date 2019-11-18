<?php
                            session_start();
                            if(isset($_SESSION['logado']) && isset($_SESSION['nivelUsuario'])){

                                if($_SESSION['nivelUsuario'] == 0){
                                    echo "<div class='alert alert-warning alerta-sm' role='alert'>";
                                    echo "Você está logado como Aluno! <a href='aluno/painel.php' class='alert-link'>Acessar</a>";
                                    echo "</div>";
                                }else if($_SESSION['nivelUsuario'] == 1){
                                    echo "<div class='alert alert-danger alerta-sm' role='alert'>";
                                    echo "Você está logado como Administrador! <a href='admin/painel.php' class='alert-link'>Acessar</a>";
                                    echo "</div>";
                                }
                            }

                            if(isset($_SESSION['erroLogin']) && isset($_SESSION['erroLoginUsuario'])){
                                if($_SESSION['erroLoginUsuario'] == 0){
                                    echo "<div class='alert alert-danger alerta-sm' role='alert'>";
                                    echo "CPF e/ou Senha inválido(s) ";
                                    echo "</div>";
                                    session_destroy();
                                }else if($_SESSION['erroLoginUsuario'] == 1){
                                    echo "<div class='alert alert-danger alerta-sm' role='alert'>";
                                    echo "Usuário e/ou Senha inválido(s) ";
                                    echo "</div>";
                                    session_destroy();
                                }
                            }
                        ?>