 {{-- menu  --}}
 <div class="Contenedor-Editable-Fondo" id="Vista">
    <ul id="main-menu" class="sm sm-blue">
      <li><a href="#">Archivo</a>
      <ul>
          <li><a href="#">Proyectos</a>
          <ul>
              <li><a href="complemento/cproyecto">Nuevo Proyecto</a></li>
              <li><a href="pro/cimportarpro">Importar Proyectos</a></li>
              <li><a href="pro/cimportarpdb">Importar Anual</a></li>
          <li><a href="pro/cimportarpdbp">Importar Puntual</a></li>
          <li><a href="pro/cmostrarpep">Mostrar</a></li>
          <li><a href="cexplicaciones">Explicaciones</a></li>
          </ul>	
          </li>
        <li><a href="{{route('gerenciashabilitadoras.index')}}">Habilitadora</a>
        <ul>
          <li><a href="complemento/chabil">Nueva habilitadora</a></li>
          <li><a href="habilitadora/cpahab">Importar Anual</a></li>
          <li><a href="chab">Importar Puntual</a></li>
           <li><a href="habilitadora/cigere">Importar Gerencia</a></li>
          
        </ul> 
        </li>
        <li><a href="#">Gerencia</a>
        <ul>
          <li><a href="complemento/cgereproyecto">Nueva gerencia</a></li>
        </ul>
        </li>
        <li><a href="ctablahab">Categoria</a>
        <ul>
          <li><a href="complemento/ccategoria">Nueva Categoria</a></li>
          <li><a href="pro/cimportarcat">Importar Categoria</a></li>
        </ul>
        </li>
    
    
      </ul>
      </li>
    
      <li><a href="cdepca">DEPCA</a>
       <ul>
         <li><a href="#">Operaciones</a></li>
       </ul> 
      </li>
       
         
      <li><a href="cdivoriental">Div Oriental</a>
       <ul>
           <li><a href="#">Esfuerzo Propio</a>
           <ul>
              <li><a href="cexplicaciones">Gestion inversion</a>
            <ul>
              <li><a href="#">Proyectos</a></li>
              <li><a href="#">Habilitadoras</a></li>
            </ul>
            </li>	
              <li><a href="#">Operaciones</a>
            <ul>
              <li><a href="#">Habilitadoras</a></li>
            </ul>
            </li>	
           </ul>
           </li>
              <li><a href="cmixtas">Empresas Mixtas</a>
              <ul>
                  <li><a href="cempetrosucre">Petrosucre</a>
               <ul>
               <li><a href="#">Proyectos</a></li>
               <li><a href="#">mixta</a></li>
               </ul>
              </li>	
                  <li><a href="#">Petrowarao</a>
                <ul>
               <li><a href="#">Proyectos</a></li>
               <li><a href="#">mixta</a></li>
               </ul>
              </li>
                  <li><a href="#">Petrolera Paria</a>
                <ul>
               <li><a href="#">Proyectos</a></li>
               <li><a href="#">mixta</a></li>
               </ul>
              </li>
    
              </ul>
              </li>
        </ul>
          </li>
    
      <li><a href="cdivocciental">Div Occidental</a>
          <ul>
           <li><a href="#">Esfuerzo Propio</a>
           <ul>
              <li><a href="#">Gestion inversion</a>
             <ul>
              <li><a href="#">Proyectos</a></li>
              <li><a href="#">Habilitadoras</a></li>
            </ul> 
            </li>	
              <li><a href="#">Operaciones</a>
             <ul>
              <li><a href="#">Habilitadoras</a></li>
            </ul> 
            </li>	
           </ul>
           </li>
              <li><a href="#">Empresas Mixtas</a>
              <ul>
                  <li><a href="#">Cardon IV</a>
                <ul>
               <li><a href="#">Proyectos</a></li>
               <li><a href="#">mixta</a></li>
               </ul>
              </li>	
                  <li><a href="#">Petrocumarebo</a>
                <ul>
               <li><a href="#">Proyectos</a></li>
               <li><a href="#">mixta</a></li>
               </ul>
              </li>
              </ul>
              </li>
        </ul>
      </li>
      <li><a href="#">Reportes</a></li>
    </ul>
{{-- final menu --}}