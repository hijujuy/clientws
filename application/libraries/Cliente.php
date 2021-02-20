WSASS - Servicio afip para gestionar certificados testing.
Clave . MiClavePrivada.key
CSR   . MiPedidoCSR.csr
Empresa [O] = facturacion
Sistema (alias)[CN] = factuweb
DN = demows
Certificado . MiCertificado.pem (crt)

OK. Autorización fue creada 
CUITCOMPUTADOR=20280637352,
ALIASCOMPUTADOR=demows,
CUITREPRESENTADO=20280637352,
SERVICIO=ws://ws_sr_constancia_inscripcion,
CUITAUTORIZANTE=20280637352
password pfx: demows

Constantes:
serviciows  => "wsfe"

Cliente:
CUIT        => long unico
DNI         => long unico
Email       => string
Apellido    => string
Nombre      => string
ClavePrivada => string // clave de 4096bits con password
dn          => array Dn:
                        countryName         => AR
                        stateOrProvinceName => Provincia
                        localityName        => Localidad
                        organizationName    => Nombre y Apellido cliente Titular
                        commonName          => alias    // nombre de usuario
                        serialNumber        => nro cuit


