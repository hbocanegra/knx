<?php

namespace knx\FacturacionBundle\Entity\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * FacturaCargoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FacturaCargoRepository extends EntityRepository 
{
	
// -------------------------------------------------------------------------------------------------------------------
	// consulta todos los clientes con su respectivo cargo y atributos a visualizar en el reporte
	public function findInformeGeneral($dateStart,$dateEnd)
	{
		$em = $this->getEntityManager();		
		$dql = $em->createQuery("SELECT c.nombre AS cliente,
										ca.soat,ca.cups, ca.nombre AS cargo,
										COUNT(fc.factura) AS cantidad,
										fc.vrUnitario, SUM(fc.vrFacturado) AS total 
								 FROM FacturacionBundle:FacturaCargo fc 
									JOIN fc.factura f
									JOIN fc.cargo ca 
									JOIN f.cliente c
								 WHERE  fc.estado!='X' AND fc.created >= :dateStart
									AND fc.created <= :dateEnd 
								 GROUP BY fc.cargo, f.cliente ORDER BY c.nombre, ca.soat ASC");

		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();	
	}
	
	// consulta todos el cliente que el usuario halla seleccionado con su respectivo cargo y atributos a visualizar en el reporte
	public function findInformeGeneralCliente($dateStart,$dateEnd,$cliente)
	{
		$em = $this->getEntityManager();
		$dql = $em->createQuery("SELECT c.nombre AS cliente,
										ca.soat,ca.cups, ca.nombre AS cargo,
										COUNT(fc.factura) AS cantidad,
										fc.vrUnitario, SUM(fc.vrFacturado) AS total
								 FROM FacturacionBundle:FacturaCargo fc
									JOIN fc.factura f
									JOIN fc.cargo ca
									JOIN f.cliente c
								 WHERE c.id = :cliente 
                                                                        AND fc.estado!='X' 
                                                                        
									AND fc.created >= :dateStart
									AND fc.created <= :dateEnd
								 GROUP BY fc.cargo, f.cliente ORDER BY c.nombre, ca.soat ASC");
	
		$dql->setParameter('cliente', $cliente);
		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();
	}
// -------------------------------------------------------------------------------------------------------------------	
	
	// consulta para asociar los clientes dependiendo a su regimen y cargo 
	public function findInformeRegimen($dateStart,$dateEnd)
	{
		$em = $this->getEntityManager();
		$dql = $em->createQuery("SELECT c.nombre AS cliente, c.tipo AS regimen,
										ca.soat,ca.cups, ca.nombre AS cargo,
										COUNT(fc.factura) AS cantidad,
										fc.vrUnitario, SUM(fc.vrFacturado) AS total
								 FROM FacturacionBundle:FacturaCargo fc
									JOIN fc.factura f
									JOIN fc.cargo ca
									JOIN f.cliente c
								 WHERE fc.created >= :dateStart
                                                                        AND fc.estado!='X'
									AND fc.created <= :dateEnd
								 GROUP BY fc.cargo, f.cliente ORDER BY c.tipo, ca.soat ASC");
	
		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();
	}
	
	// consulta para asociar los clientes dependiendo a su regimen seleccionado 
	public function findInformeTipoRegimen($dateStart,$dateEnd,$regimen)
	{
		$em = $this->getEntityManager();
		$dql = $em->createQuery("SELECT c.nombre AS cliente, c.tipo AS regimen,
										ca.soat,ca.cups, ca.nombre AS cargo,
										COUNT(fc.factura) AS cantidad,
										fc.vrUnitario, SUM(fc.vrFacturado) AS total
								 FROM FacturacionBundle:FacturaCargo fc
									JOIN fc.factura f
									JOIN fc.cargo ca
									JOIN f.cliente c
								 WHERE c.tipo = :regimen
                                                                        AND fc.estado!='X'
									AND fc.created >= :dateStart
									AND fc.created <= :dateEnd
								 GROUP BY fc.cargo, f.cliente ORDER BY c.tipo, ca.soat ASC");
	
		$dql->setParameter('regimen', $regimen);
		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();
	}
	
// -------------------------------------------------------------------------------------------------------------------	
	
	// consulta y asocia por el servicio y el cargo ya q un servicio puede tener diferentes cargos 
	public function findInformeServicio($dateStart,$dateEnd)
	{
		$em = $this->getEntityManager();
		$dql = $em->createQuery("SELECT s.nombre AS servicio,
										ca.soat,ca.cups, ca.nombre AS cargo,
										COUNT(fc.factura) AS cantidad,
										fc.vrUnitario, SUM(fc.vrFacturado) AS total
								 FROM FacturacionBundle:FacturaCargo fc
									JOIN fc.factura f
									JOIN fc.cargo ca									
									JOIN f.servicio s
								 WHERE fc.created >= :dateStart
                                                                        AND fc.estado!='X'
									AND fc.created <= :dateEnd
								 GROUP BY f.servicio, fc.cargo ORDER BY s.nombre, ca.soat ASC");
	
		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();
	}
	
	// consulta y asocia por el servicio seleccionado y el cargo ya q un servicio puede tener diferentes cargos
	public function findInformeTipoServicio($dateStart,$dateEnd,$servicio)
	{
		$em = $this->getEntityManager();
		$dql = $em->createQuery("SELECT s.nombre AS servicio,
										ca.soat,ca.cups, ca.nombre AS cargo,
										COUNT(fc.factura) AS cantidad,
										fc.vrUnitario, SUM(fc.vrFacturado) AS total
								 FROM FacturacionBundle:FacturaCargo fc
									JOIN fc.factura f
									JOIN fc.cargo ca
									JOIN f.servicio s
								 WHERE s.id = :servicio
                                                                        AND fc.estado!='X'
									AND fc.created >= :dateStart
									AND fc.created <= :dateEnd
								 GROUP BY f.servicio, fc.cargo ORDER BY s.nombre, ca.soat ASC");
	
		$dql->setParameter('servicio', $servicio);
		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();
	}
// -------------------------------------------------------------------------------------------------------------------

	
//------------- informes por consultas realizadas por los diferentes medicos excluyendo quizas algunas facturas realizadas a un usuario sin role medico
	public function findInformeConsultasMedicos($dateStart,$dateEnd)
	{
		
		$em = $this->getEntityManager();
		$dql = $em->createQuery("SELECT s.nombre AS servicio,
										ca.soat, ca.nombre AS cargo,
										u.nombre, u.apellido, u.especialidad,
										COUNT(fc.factura) AS cantidad				
										
								 FROM FacturacionBundle:FacturaCargo fc
									JOIN fc.factura f
									JOIN fc.cargo ca
									JOIN f.servicio s,									
									UsuarioBundle:Usuario u
								 WHERE 
                                                                 
									fc.created >= :dateStart
                                                                        AND fc.estado!='X'
									AND fc.created <= :dateEnd
									AND f.profesional = u.id
									AND u.roles LIKE :roles
								 GROUP BY f.profesional, fc.cargo, f.servicio ORDER BY f.profesional, ca.soat ASC");
				
		$dql->setParameter('roles', '%ROLE_MEDICO%');
		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();
		
	}
	
	public function findInformeConsultaMedico($dateStart,$dateEnd,$usuario)
	{
		
		$em = $this->getEntityManager();
		$dql = $em->createQuery("SELECT s.nombre AS servicio,
										ca.soat, ca.nombre AS cargo,
										u.nombre, u.apellido, u.especialidad,
										COUNT(fc.factura) AS cantidad
		
								 FROM FacturacionBundle:FacturaCargo fc
									JOIN fc.factura f
									JOIN fc.cargo ca
									JOIN f.servicio s,
									UsuarioBundle:Usuario u
								 WHERE
									fc.created >= :dateStart
                                                                        AND fc.estado!='X'
									AND fc.created <= :dateEnd
									AND f.profesional = :usuario
									AND u.id = :usuario
								 GROUP BY fc.cargo, f.servicio ORDER BY ca.nombre ASC");
		
		$dql->setParameter('usuario', $usuario);
		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();
	}
// -------------------------------------------------------------------------------------------------------------------

// -----consultas a la historia para generar informes por remision---------------------------
	public function findInformeRemisionRealizada($dateStart,$dateEnd)
	{
		$em = $this->getEntityManager();
		$dql = $em->createQuery("SELECT h.destino_r, h.especialidad_r, h.nuAuto_r, h.descripcion_r, h.rServicio									
								 FROM HistoriaBundle:Hc h
									JOIN h.factura f
								 WHERE
									h.destino = :remision
									AND f.created >= :dateStart
									AND f.created <= :dateEnd	
								 ORDER BY f.created DESC");

		$dql->setParameter('remision', '4');
		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();
	}
	
	
//------ Generar las respectivas consultas para los informes de morbilidad ---------------//
	public function findMorbilidad($atencion,$genero,$oldStart,$oldEnd,$centroCostos,$dateStart,$dateEnd)
	{
		$oldStart = date('Y-m-d', strtotime('-'.$oldStart.' year')) ;
		$oldEnd = date('Y-m-d', strtotime('-'.$oldEnd.' year')) ;
		
		// se instancian los atributos en null
		$dqlAtencion="";
		$dqlSexo="";
		$dqlServicio="";
		
		// si los atributos cumplen con la condicion se asigna una parte de consulta si no se toma como una consulta general
		if($atencion != 'T')
		{
			$dqlAtencion="AND h.tipoAtencion = :atencion";
		}
		if($genero != 'T')
		{
			$dqlSexo = "AND p.sexo = :genero";
		}
		if($centroCostos != 'T')
		{
			$dqlServicio="AND s.nombre = :servicio";
		}
		
		$em = $this->getEntityManager();
		$dql = $em->createQuery("SELECT c.nombre, c.codigo, COUNT(hcdx.cie) AS cantidad
								 FROM HistoriaBundle:HcDx hcdx
									JOIN hcdx.cie c				
									JOIN hcdx.hc h	
									JOIN h.factura f
									JOIN f.servicio s																	
									JOIN f.paciente p									
								 WHERE									
									p.fN >= :max
									AND p.fN <= :min
									".$dqlAtencion."									
									".$dqlSexo."
									".$dqlServicio."
									AND f.created >= :dateStart
									AND f.created <= :dateEnd
                                                                        AND f.estado!='X'
								 GROUP BY c.nombre, c.codigo ORDER BY c.nombre ASC");
		
		
		$dql->setParameter('max', $oldEnd);
		$dql->setParameter('min', $oldStart);
				
		// se ingresan los valores de los atributos si contienen informacion.
		if($dqlAtencion){$dql->setParameter('atencion', $atencion);}
		if($dqlSexo){$dql->setParameter('genero', $genero);}
		if($dqlServicio){$dql->setParameter('servicio', $centroCostos);}	
			
		$dql->setParameter('dateStart', $dateStart);
		$dql->setParameter('dateEnd', $dateEnd);
		return $dql->getResult();
	}
}
