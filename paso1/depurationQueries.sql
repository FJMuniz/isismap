
--tituloT
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN tituloT REGEXP '&[^\s]*;'
THEN HTML_UnEncode(tituloT)
ELSE tituloT END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.tituloT = new.Contact 
WHERE old.id = new.id; 


--tituloP
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN tituloP REGEXP '&[^\s]*;'
THEN HTML_UnEncode(tituloP)
ELSE tituloP END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.tituloP = new.Contact 
WHERE old.id = new.id; 

##tituloI
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN tituloI REGEXP '&[^\s]*;'
THEN HTML_UnEncode(tituloI)
ELSE tituloI END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.tituloI = new.Contact 
WHERE old.id = new.id; 

##tituloU
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN tituloU REGEXP '&[^\s]*;'
THEN HTML_UnEncode(tituloU)
ELSE tituloU END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.tituloU = new.Contact 
WHERE old.id = new.id; 

##autorN
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN autorN REGEXP '&[^\s]*;'
THEN HTML_UnEncode(autorN)
ELSE autorN END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.autorN = new.Contact 
WHERE old.id = new.id; 

##autorG
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN autorG REGEXP '&[^\s]*;'
THEN HTML_UnEncode(autorG)
ELSE autorG END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.autorG = new.Contact 
WHERE old.id = new.id; 

##autorF
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN autorF REGEXP '&[^\s]*;'
THEN HTML_UnEncode(autorF)
ELSE autorF END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.autorF = new.Contact 
WHERE old.id = new.id; 

##autorA
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN autorA REGEXP '&[^\s]*;'
THEN HTML_UnEncode(autorA)
ELSE autorA END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.autorA = new.Contact 
WHERE old.id = new.id; 

##autorH
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN autorH REGEXP '&[^\s]*;'
THEN HTML_UnEncode(autorH)
ELSE autorH END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.autorH = new.Contact 
WHERE old.id = new.id; 

##autorB
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN autorB REGEXP '&[^\s]*;'
THEN HTML_UnEncode(autorB)
ELSE autorB END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.autorB = new.Contact 
WHERE old.id = new.id; 

##autorALL
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN autorALL REGEXP '&[^\s]*;'
THEN HTML_UnEncode(autorALL)
ELSE autorALL END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.autorALL = new.Contact 
WHERE old.id = new.id; 

##edicion
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN edicion REGEXP '&[^\s]*;'
THEN HTML_UnEncode(edicion)
ELSE edicion END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.edicion = new.Contact 
WHERE old.id = new.id; 

##editorialL
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN editorialL REGEXP '&[^\s]*;'
THEN HTML_UnEncode(editorialL)
ELSE editorialL END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.editorialL = new.Contact 
WHERE old.id = new.id; 

##editorialG
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN editorialG REGEXP '&[^\s]*;'
THEN HTML_UnEncode(editorialG)
ELSE editorialG END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.editorialG = new.Contact 
WHERE old.id = new.id; 

##editorialE
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN editorialE REGEXP '&[^\s]*;'
THEN HTML_UnEncode(editorialE)
ELSE editorialE END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.editorialE = new.Contact 
WHERE old.id = new.id; 

##editorialD
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN editorialD REGEXP '&[^\s]*;'
THEN HTML_UnEncode(editorialD)
ELSE editorialD END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.editorialD = new.Contact 
WHERE old.id = new.id;

##editorialT
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN editorialT REGEXP '&[^\s]*;'
THEN HTML_UnEncode(editorialT)
ELSE editorialT END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.editorialT = new.Contact 
WHERE old.id = new.id;

##anoedicion
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN anoedicion REGEXP '&[^\s]*;'
THEN HTML_UnEncode(anoedicion)
ELSE anoedicion END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.anoedicion = new.Contact 
WHERE old.id = new.id;

##colacion
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN colacion REGEXP '&[^\s]*;'
THEN HTML_UnEncode(colacion)
ELSE colacion END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.colacion = new.Contact 
WHERE old.id = new.id;

##coleccion
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN coleccion REGEXP '&[^\s]*;'
THEN HTML_UnEncode(coleccion)
ELSE coleccion END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.coleccion = new.Contact 
WHERE old.id = new.id;

##ISBN
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN ISBN REGEXP '&[^\s]*;'
THEN HTML_UnEncode(ISBN)
ELSE ISBN END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.ISBN = new.Contact 
WHERE old.id = new.id;

##notas
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN notas REGEXP '&[^\s]*;'
THEN HTML_UnEncode(notas)
ELSE notas END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.notas = new.Contact 
WHERE old.id = new.id;

##idioma
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN idioma REGEXP '&[^\s]*;'
THEN HTML_UnEncode(idioma)
ELSE idioma END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.idioma = new.Contact 
WHERE old.id = new.id;

##tipo
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN tipo REGEXP '&[^\s]*;'
THEN HTML_UnEncode(tipo)
ELSE tipo END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.tipo = new.Contact 
WHERE old.id = new.id;

##ubicacion
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN ubicacion REGEXP '&[^\s]*;'
THEN HTML_UnEncode(ubicacion)
ELSE ubicacion END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.ubicacion = new.Contact 
WHERE old.id = new.id;

##soporte
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN soporte REGEXP '&[^\s]*;'
THEN HTML_UnEncode(soporte)
ELSE soporte END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.soporte = new.Contact 
WHERE old.id = new.id;

##signaturaT
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaT REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaT)
ELSE signaturaT END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaT = new.Contact 
WHERE old.id = new.id;

##signaturaX
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaX REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaX)
ELSE signaturaX END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaX = new.Contact 
WHERE old.id = new.id;

##signaturaC
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaC REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaC)
ELSE signaturaC END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaC = new.Contact 
WHERE old.id = new.id;

##signaturaH
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaH REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaH)
ELSE signaturaH END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaH = new.Contact 
WHERE old.id = new.id;

##signatura1
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signatura1 REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signatura1)
ELSE signatura1 END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signatura1 = new.Contact 
WHERE old.id = new.id;

##signatura2
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signatura2 REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signatura2)
ELSE signatura2 END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signatura2 = new.Contact 
WHERE old.id = new.id;

##signatura3
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signatura3 REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signatura3)
ELSE signatura3 END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signatura3 = new.Contact 
WHERE old.id = new.id;

##signaturaP
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaP REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaP)
ELSE signaturaP END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaP = new.Contact 
WHERE old.id = new.id;

##signaturaS
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaS REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaS)
ELSE signaturaS END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaS = new.Contact 
WHERE old.id = new.id;

##signaturaA
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaA REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaA)
ELSE signaturaA END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaA = new.Contact 
WHERE old.id = new.id;

##signaturaV
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaV REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaV)
ELSE signaturaV END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaV = new.Contact 
WHERE old.id = new.id;

##signaturaN
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaN REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaN)
ELSE signaturaN END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaN = new.Contact 
WHERE old.id = new.id;

##signaturaE
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaE REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaE)
ELSE signaturaE END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaE = new.Contact 
WHERE old.id = new.id;

##signaturaJ
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN signaturaJ REGEXP '&[^\s]*;'
THEN HTML_UnEncode(signaturaJ)
ELSE signaturaJ END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.signaturaJ = new.Contact 
WHERE old.id = new.id;

##fechaI
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN fechaI REGEXP '&[^\s]*;'
THEN HTML_UnEncode(fechaI)
ELSE fechaI END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.fechaI = new.Contact 
WHERE old.id = new.id;

##fechaM
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN fechaM REGEXP '&[^\s]*;'
THEN HTML_UnEncode(fechaM)
ELSE fechaM END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.fechaM = new.Contact 
WHERE old.id = new.id;

##NB
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN NB REGEXP '&[^\s]*;'
THEN HTML_UnEncode(NB)
ELSE NB END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.NB = new.Contact 
WHERE old.id = new.id;

##materia62
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN materia62 REGEXP '&[^\s]*;'
THEN HTML_UnEncode(materia62)
ELSE materia62 END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.materia62 = new.Contact 
WHERE old.id = new.id;

##materia700
UPDATE isis as old
INNER JOIN (SELECT id,
CASE WHEN materia700 REGEXP '&[^\s]*;'
THEN HTML_UnEncode(materia700)
ELSE materia700 END AS Contact
FROM isis) as new
ON old.id = new.id
SET old.materia700 = new.Contact 
WHERE old.id = new.id;