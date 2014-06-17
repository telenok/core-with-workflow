{
    "title": "BPMN 2.0",
    "namespace": "http://b3mn.org/stencilset/bpmn2.0#",
    "description": "This is the BPMN 2.0 stencil set specification.",
    "propertyPackages": [
        {
            "name": "baseAttributes",
            "properties": [
                {
                    "id": "name",
                    "type": "String",
                    "title": "Name",
                    "value": "",
                    "description": "The descriptive name of the BPMN element.",
                    "description_de": "Bezeichnung des BPMN-Elementes.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true,
                    "refToView": "text_name"
                },
                {
                    "id": "documentation",
                    "type": "Text",
                    "title": "Documentation",
                    "title_de": "Dokumentation",
                    "value": "",
                    "description": "This attribute is used to annotate the BPMN element, such as descriptions and other documentation.",
                    "description_de": "Der Modellierer kann weiteren Text zur Dokumentation des BPMN-Elementes einfügen.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true,
                    "popular": true
                },
                {
                    "id": "auditing",
                    "type": "Text",
                    "title": "Auditing",
                    "title_de": "Prüfung",
                    "value": "",
                    "description": "A hook for specifying audit related properties. Auditing can only be defined for a Process.",
                    "description_de": "",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                },
                {
                    "id": "monitoring",
                    "type": "Text",
                    "title": "Monitoring",
                    "title_de": "Überwachung",
                    "value": "",
                    "description": "A hook for specifying monitoring related properties. Monitoring can only be defined for a Process.",
                    "description_de": "",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                }
            ]
        },
        {
            "name": "bgColor",
            "properties": [
                {
                    "id": "bgcolor",
                    "type": "Color",
                    "title": "BackgroundColor",
                    "title_de": "Hintergrundfarbe",
                    "value": "#ffffff",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "fill_el",
                    "fill": true,
                    "stroke": false
                }
            ]
        },
        {
            "name": "condition",
            "properties": [
                {
                    "id": "condition",
                    "type": "String",
                    "title": "Condition",
                    "title_de": "Bedingung",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "popular": true
                }
            ]
        },
        {
            "name": "boundaryevent",
            "properties": [
                {
                    "id": "boundarycancelactivity",
                    "type": "Boolean",
                    "title": "CancelActivity",
                    "title_de": "Aktivität abbrechen",
                    "value": "",
                    "description": "Denotes whether the activity should be cancelled or not, i.e., whether the boundary catch event acts as an error or an escalation. If the activity is not cancelled, multiple instances of that handler can run concurrently.",
                    "description_de": "Kennzeichnet ob eine Aktivität abgebrochen werden soll.",
                    "readonly": false,
                    "optional": true
                }
            ]
        },
        {
            "name": "catchEventAttributes",
            "properties": [
                {
                    "id": "eventdefinitionref",
                    "type": "String",
                    "title": "EventDefinitionRef",
                    "title_de": "Ereignis-Definitions Referenz",
                    "value": "",
                    "description": "EventDefinitionRefs (EventDefinition) is an attribute that defines the type of reusable triggers expected for a catch Event.",
                    "description_de": "Das Attribut EreignisDefinitionsRef (EreignisDefinition) definiert einen wiederverwendbaren Auslösertyp für ein eintretendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                },
                {
                    "id": "eventdefinitions",
                    "type": "String",
                    "title": "EventDefinitions",
                    "title_de": "EreignisDefinitionen",
                    "value": "",
                    "description": "EventDefinitions (EventDefinition) is an attribute that defines the type of contained triggers expected for a catch Event.",
                    "description_de": "Das Attribut EreignisDefinitions (EreignisDefinition) definiert die beinhaltenten Auslöser für ein eintretendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                },
                {
                    "id": "dataoutputassociations",
                    "type": "String",
                    "title": "DataOutputAssociations",
                    "title_de": "Daten Ausgangs-Assoziation",
                    "value": "",
                    "description": "The Data Associations of the catch Event.",
                    "description_de": "Die Daten-Assoziation für ein eintretendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                },
                {
                    "id": "dataoutput",
                    "type": "String",
                    "title": "DataOutput",
                    "title_de": "Daten-Ausgang",
                    "value": "",
                    "description": "The Data Associations of the catch Event.",
                    "description_de": "Die Daten-Assoziation für ein eintretendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                },
                {
                    "id": "outputset",
                    "type": "String",
                    "title": "OutputSet",
                    "title_de": "Ausgabe-Menge",
                    "value": "",
                    "description": "The OutputSet for the catch Event.",
                    "description_de": "Die Ausgabe-Sätze für ein eintretendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                }
            ]
        },
        {
            "name": "throwEventAttributes",
            "properties": [
                {
                    "id": "eventdefinitionref",
                    "type": "String",
                    "title": "EventDefinitionRef",
                    "title_de": "Ereignis Definitions-Referenz",
                    "value": "",
                    "description": "EventDefinitionRefs (EventDefinition) is an attribute that defines the type of reusable triggers expected for a catch Event.",
                    "description_de": "Das Attribut EreignisDefinitionsRef (EreignisDefinition) definiert einen wiederverwendbaren Auslösertyp für ein eintretendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                },
                {
                    "id": "eventdefinitions",
                    "type": "String",
                    "title": "EventDefinitions",
                    "title_de": "EreignisDefinitionen",
                    "value": "",
                    "description": "EventDefinitions (EventDefinition) is an attribute that defines the type of contained triggers expected for a catch Event.",
                    "description_de": "Das Attribut EreignisDefinitions (EreignisDefinition) definiert die beinhaltenten Auslöser für ein eintretendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                },
                {
                    "id": "datainputassociations",
                    "type": "String",
                    "title": "DataInputAssociations",
                    "title_de": "Daten Ausgangs-Assoziationen",
                    "value": "",
                    "description": "The Data Associations of the throw Event.",
                    "description_de": "Die Daten-Assoziationen für ein auslösendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                },
                {
                    "id": "datainput",
                    "type": "String",
                    "title": "Data Input",
                    "title_de": "Daten-Eingang",
                    "value": "",
                    "description": "The Data Associations of the throw Event.",
                    "description_de": "Die Daten-Assoziation für ein auslösendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                },
                {
                    "id": "inputset",
                    "type": "String",
                    "title": "InputSet",
                    "title_de": "Ausgabe-Menge",
                    "value": "",
                    "description": "The InputSet for the throw Event.",
                    "description_de": "Die Ausgabe-Sätze für ein auslösendes Ereignis.",
                    "readonly": false,
                    "optional": true,
                    "length": "",
                    "wrapLines": true
                }
            ]
        },
        {
            "name": "compensationThrowing",
            "properties": [
                {
                    "id": "waitforcompletion",
                    "type": "Boolean",
                    "title": "Wait for completion",
                    "title_de": "Auf Fertigstellung warten",
                    "value": true,
                    "popular": true,
                    "description": "Determine whether a throw compensation is performed synchronously or asynchronously.",
                    "description_de": "Gibt an, ob die erzeugt Kompensierung synchron oder asynchron aufgerufen wird.",
                    "readonly": false,
                    "optional": true
                }
            ]
        },
        {
            "name": "compensation",
            "properties": [
                {
                    "id": "activityref",
                    "type": "String",
                    "title": "Activity reference",
                    "title_de": "Aktivitätsreferenz",
                    "value": "",
                    "popular": true,
                    "description": "The activity related to the compensation event",
                    "description_de": "Die Kompensierung betreffende Aktivität",
                    "readonly": false,
                    "optional": true
                }
            ]
        },
        {
            "name": "interrupting",
            "properties": [
                {
                    "id": "isinterrupting",
                    "type": "Boolean",
                    "title": "Is Interrupting",
                    "title_de": "ist unterbrechend",
                    "value": true,
                    "description": "This attribute denotes whether the Sub-Process encompassing the Event Sub-Process should be cancelled or not.",
                    "description_de": "Dieses Attribut gibt an, ob der umfassende Subprozess abgebrochen werden soll.",
                    "inverseBoolean": false,
                    "readonly": false,
                    "optional": true,
                    "refToView": [
                        "frame",
                        "frame2"
                    ]
                }
            ]
        },
        {
            "name": "diagram",
            "properties": [
                {
                    "id": "version",
                    "type": "String",
                    "title": "Version",
                    "value": "",
                    "description": "This defines the Version number of the Diagram.",
                    "description_de": "Setzt die Versionsnummer des Diagramms.",
                    "readonly": false,
                    "optional": true,
                    "length": "50"
                },
                {
                    "id": "author",
                    "type": "String",
                    "title": "Author",
                    "title_de": "Autor",
                    "value": "",
                    "description": "This holds the name of the author of the Diagram.",
                    "description_de": "Name des Autors des Diagramms.",
                    "readonly": false,
                    "optional": true,
                    "length": "50"
                },
                {
                    "id": "language",
                    "type": "String",
                    "title": "Language",
                    "title_de": "Sprache",
                    "value": "English",
                    "value_de": "Deutsch",
                    "description": "This holds the name of the language in which text is written.",
                    "description_de": "Sprache, in welcher der Text geschrieben ist.",
                    "readonly": false,
                    "optional": true,
                    "length": "50"
                },
                {
                    "id": "namespaces",
                    "type": "Complex",
                    "title": "Namespaces",
                    "value": "",
                    "description": "Additional namespaces and theire prefixes used in the diagram., ",
                    "description_de": "Optionale Namespaces, die im Diagramm genutzt werden.",
                    "readonly": false,
                    "optional": true,
                    "complexItems": [
                        {
                            "id": "prefix",
                            "name": "Prefix",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "url",
                            "name": "URL",
                            "type": "String",
                            "value": "",
                            "width": 200,
                            "optional": false
                        }
                    ]
                },
                {
                    "id": "targetnamespace",
                    "type": "String",
                    "title": "Target Namespace",
                    "title_de": "Ziel-Namensraum",
                    "value": "http://www.omg.org/bpmn20",
                    "description": "Defines the XML namespace of the elements inside the document.",
                    "description_de": "Definiert den XML-Namensraum, der für die Elemente im Dokument verwendet wird.",
                    "readonly": false,
                    "optional": true,
                    "length": "50"
                },
                {
                    "id": "expressionlanguage",
                    "type": "String",
                    "title": "ExpressionLanguage",
                    "title_de": "Ausdruckssprache",
                    "value": "http://www.w3.org/1999/XPath",
                    "description": "A Language may be provided so that the syntax of expressions used in the Diagram can be understood.",
                    "description_de": "Sprache, mit welcher im Diagramm verwendete Ausdrücke beschrieben sind.",
                    "readonly": false,
                    "optional": true,
                    "length": "50"
                },
                {
                    "id": "typelanguage",
                    "type": "String",
                    "title": "TypeLanguage",
                    "title_de": "Typsprache",
                    "value": "http://www.w3.org/2001/XMLSchema",
                    "description": "This attribute identifies the type system used by the elements of this Definition.",
                    "description_de": "Definiert das Typsystem der Elemente dieses Diagramms.",
                    "readonly": false,
                    "optional": true,
                    "length": "50"
                },
                {
                    "id": "creationdate",
                    "type": "Date",
                    "title": "CreationDate",
                    "title_de": "Erstellt am",
                    "value": "",
                    "description": "This defines the date on which the Diagram was created.",
                    "description_de": "Datum an dem das Diagramm erstellt wurde.",
                    "readonly": false,
                    "optional": true,
                    "dateFormat": "j/m/y"
                },
                {
                    "id": "modificationdate",
                    "type": "Date",
                    "title": "ModificationDate",
                    "title_de": "Geändert am",
                    "value": "",
                    "description": "This defines the date on which the Diagram was last modified.",
                    "description_de": "Datum der letzten Änderung.",
                    "readonly": false,
                    "optional": true,
                    "dateFormat": "j/m/y"
                }
            ]
        },
        {
            "name": "flowElement",
            "properties": [
                {
                    "id": "categories",
                    "type": "String",
                    "title": "Categories",
                    "title_de": "Kategorien",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50",
                    "wrapLines": true
                }
            ]
        },
        {
            "name": "itemAwareElement",
            "properties": [
                {
                    "id": "itemsubjectref",
                    "type": "String",
                    "title": "ItemSubjectRef",
                    "title_de": "ItemSubjectRef",
                    "description": "Specification of the items that are stored or conveyed by the ItemAwareElement",
                    "description_de": "",
                    "readonly": false,
                    "optional": true,
                    "length": 50,
                    "wrapLines": true
                },
                {
                    "id": "datastate",
                    "type": "String",
                    "title": "DataState",
                    "title_de": "Daten-Zustand",
                    "description": "A reference to the DataState, which defines certain states for the data contained in the item.",
                    "description_de": "",
                    "readonly": false,
                    "optional": true,
                    "length": 50,
                    "wrapLines": true
                }
            ]
        },
        {
            "name": "properties",
            "properties": [
                {
                    "id": "properties",
                    "type": "Complex",
                    "title": "Properties",
                    "title_de": "Eigenschaften",
                    "value": "",
                    "description": "Modeler-defined properties MAY be added to an Activity. These properties are local to the Activity. (e.g., Add Customer.Customer Name).",
                    "description_de": "Lokale Eigenschaften können der Aktivität hinzugefügt werden. Diese werden ausschließlich während der Abarbeitung der Aktivität angewendet.",
                    "readonly": false,
                    "optional": false,
                    "complexItems": [
                        {
                            "id": "name",
                            "name": "Name",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "datastate",
                            "name": "DataState",
                            "name_de": "DatenStatus",
                            "type": "String",
                            "value": "",
                            "width": 80,
                            "optional": true
                        },
                        {
                            "id": "itemkind",
                            "name": "ItemKind",
                            "name_de": "Elementart",
                            "type": "Choice",
                            "value": "Information",
                            "items": [
                                {
                                    "id": "information",
                                    "title": "Information",
                                    "value": "Information"
                                },
                                {
                                    "id": "physical",
                                    "title": "Physical",
                                    "value": "Physical"
                                }

                            ],
                            "width": 80,
                            "optional": true
                        },
                        {
                            "id": "structure",
                            "name": "Structure",
                            "name_de": "Struktur",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": true
                        },
                        {
                            "id": "iscollection",
                            "name": "isCollection",
                            "name_de": "isKollektion",
                            "type": "Boolean",
                            "value": false,
                            "width": 50,
                            "optional": true
                        }
                    ]
                }
            ]
        },
        {
            "name": "iospecification",
            "properties": [
                {
                    "id": "datainputset",
                    "type": "Complex",
                    "title": "DataInputSet",
                    "title_de": "Dateneingabesatz",
                    "value": "",
                    "description": "An InputSet is a collection of DataInput elements that together define a valid set of data inputs.",
                    "description_de": "Ein Eingabesatz ist eine Zusammenstellung von Eingabe-Datenobjekten, die zusammen einen gültigen Satz von Dataeingaben definieren.",
                    "readonly": false,
                    "optional": true,
                    "complexItems": [
                        {
                            "id": "name",
                            "name": "Name",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "optional",
                            "name": "Optional",
                            "type": "Boolean",
                            "value": false,
                            "width": 50,
                            "optional": true
                        },
                        {
                            "id": "whileexecuting",
                            "name": "WhileExecuting",
                            "name_de": "Während der Ausführung",
                            "type": "Boolean",
                            "value": false,
                            "width": 80,
                            "optional": true
                        }
                    ]
                },
                {
                    "id": "dataoutputset",
                    "type": "Complex",
                    "title": "DataOutputSet",
                    "title_de": "Datenausgabesatz",
                    "value": "",
                    "description": "An OutputSet is a collection of DataOutputs elements that together may be produced as output from an Activity or Event.",
                    "description_de": "Ein Ausgabesatz ist eine Zusammenstellung von Ausgabe-Datenobjekten, die zusammen als Ausgabe einer Aktivität oder eines Ereignisses produziert werden.",
                    "readonly": false,
                    "optional": true,
                    "complexItems": [
                        {
                            "id": "name",
                            "name": "Name",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "optional",
                            "name": "Optional",
                            "type": "Boolean",
                            "value": false,
                            "width": 50,
                            "optional": true
                        },
                        {
                            "id": "whileexecuting",
                            "name": "WhileExecuting",
                            "name_de": "Während der Ausführung",
                            "type": "Boolean",
                            "value": false,
                            "width": 80,
                            "optional": true
                        }
                    ]
                }
            ]
        },
        {
            "name": "activity",
            "properties": [
                {
                    "id": "startquantity",
                    "type": "Integer",
                    "title": "StartQuantity",
                    "title_de": "Startanzahl",
                    "value": 1,
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "",
                    "min": "1"
                },
                {
                    "id": "completionquantity",
                    "type": "Integer",
                    "title": "CompletionQuantity",
                    "title_de": "Fertigstellungsanzahl",
                    "value": 1,
                    "description": "Defines the number of tokens that must be generated from the activity",
                    "description_de": "Legt die Anzahl der Token fest, die von der Aktivität generiert werden müssen.",
                    "readonly": false,
                    "optional": false,
                    "refToView": "",
                    "min": "1"
                },
                {
                    "id": "isforcompensation",
                    "type": "Boolean",
                    "title": "Is for Compensation",
                    "title_de": "ist für Kompensation",
                    "value": false,
                    "description": "A flag that identifies whether this activity is intended for the purposes of compensation.",
                    "description_de": "Ein Flag, das angibt ob diese Aktivität für Kompensierungszwecke vorgesehen ist.",
                    "readonly": false,
                    "optional": true,
                    "refToView": "compensation"
                },
                {
                    "id": "assignments",
                    "type": "Complex",
                    "title": "Assignments",
                    "title_de": "Zuweisungen",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "complexItems": [
                        {
                            "id": "to",
                            "name": "To",
                            "name_de": "Auf",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "from",
                            "name": "From",
                            "name_de": "Aus",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "assigntime",
                            "name": "AssignTime",
                            "name_de": "Zuweisungszeit",
                            "type": "Choice",
                            "value": "Start",
                            "width": 100,
                            "optional": true,
                            "items": [
                                {
                                    "id": "c1",
                                    "title": "Start",
                                    "value": "Start",
                                    "refToView": ""
                                },
                                {
                                    "id": "c2",
                                    "title": "End",
                                    "title_de": "Ende",
                                    "value": "End",
                                    "refToView": ""
                                }
                            ]
                        }
                    ]
                },
                {
                    "id": "callacitivity",
                    "type": "Boolean",
                    "title": "is a Call Activity",
                    "title_de": "ist eine Call Activity",
                    "value": false,
                    "description": "a Call Activity is a wrapper for a globally defined Sub-Process that is reused in the current process.",
                    "readonly": false,
                    "optional": "true",
                    "refToView": "callActivity"
                }
            ]
        },
        {
            "name": "operation",
            "properties": [
                {
                    "id": "operationname",
                    "type": "String",
                    "title": "OperationName",
                    "title_de": "Operationsname",
                    "value": "",
                    "description": "The descriptive name for the operation element.",
                    "description_de": "Bezeichnung der Operation",
                    "readonly": false,
                    "optional": "true"
                },
                {
                    "id": "inmessagename",
                    "type": "String",
                    "title": "InMessageName",
                    "title_de": "Eingangs-Nachricht-Name",
                    "value": "",
                    "description": "The descriptive name for the InMessage element",
                    "description_de": "Bezeichnung der Eingangs-Nachricht",
                    "readonly": false,
                    "optional": "true"
                },
                {
                    "id": "inmsgitemkind",
                    "type": "Choice",
                    "title": "InMessageItemKind",
                    "title_de": "Eingangs-Nachricht-Typ",
                    "value": "Information",
                    "description": "This defines the nature of the Item. Possible values are Physical or Information. The default value is Information.",
                    "description_de": "Beim Typ der Nachricht kann zwischen Physisch und Information unterschieden werden.",
                    "readonly": false,
                    "optional": true,
                    "items": [
                        {
                            "id": "c1",
                            "title": "Physical",
                            "value": "Physical"
                        },
                        {
                            "id": "c2",
                            "title": "Information",
                            "value": "Information"
                        }
                    ]
                },
                {
                    "id": "inmsgstructure",
                    "type": "String",
                    "title": "InMessageStructure",
                    "title_de": "Eingangs-Nachricht-Struktur",
                    "value": "",
                    "description": "This defines the nature of the Item. Possible values are Physical or Information. The default value is Information.",
                    "description_de": "Beim Typ der Nachricht kann zwischen Physisch und Information unterschieden werden.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "inmsgimport",
                    "type": "Complex",
                    "title": "InMessageImport",
                    "title_de": "Eingangs-Nachricht-Import",
                    "value": "",
                    "description": "Identifies the location of the data structure and its format. If the importType attribute is left unspecified, the typeLanguage specified in the Definitions is assumed.",
                    "description_de": "Definiert den Ort der Datenstruktur und ihr Format.",
                    "readonly": false,
                    "optional": true,
                    "complexItems": [
                        {
                            "id": "c1",
                            "type": "String",
                            "width": 200,
                            "value": "",
                            "name": "ImportType",
                            "name_de": "Importtyp"
                        },
                        {
                            "id": "c2",
                            "type": "String",
                            "width": 100,
                            "value": "",
                            "name": "Location"
                        },
                        {
                            "id": "c3",
                            "type": "String",
                            "width": 200,
                            "value": "",
                            "name": "Namespace",
                            "name_de": "Namensraum"
                        }
                    ]
                },
                {
                    "id": "inmsgiscollection",
                    "type": "Boolean",
                    "title": "InMessageIsCollection",
                    "title_de": "Eingangs-Nachricht-Ist-Liste",
                    "value": false,
                    "description": "Setting this flag to true indicates that the actual data type is a collection.",
                    "description_de": "Ture signalisiert, dass der Datentyp eine Liste ist.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "outmessagename",
                    "type": "String",
                    "title": "OutMessageName",
                    "title_de": "Ausgangs-Nachricht-Name",
                    "value": "",
                    "description": "The descriptive name for the OutMessage element",
                    "description_de": "Bezeichnung der Ausgangs-Nachricht",
                    "readonly": false,
                    "optional": "true"
                },
                {
                    "id": "outmsgitemkind",
                    "type": "Choice",
                    "title": "OutMessageItemKind",
                    "title_de": "Ausgangs-Nachricht-Typ",
                    "value": "Information",
                    "description": "This defines the nature of the Item. Possible values are Physical or Information. The default value is Information.",
                    "description_de": "Beim Typ der Nachricht kann zwischen Physisch und Information unterschieden werden.",
                    "readonly": false,
                    "optional": true,
                    "items": [
                        {
                            "id": "c1",
                            "title": "Physical",
                            "value": "Physical"
                        },
                        {
                            "id": "c2",
                            "title": "Information",
                            "value": "Information"
                        }
                    ]
                },
                {
                    "id": "outmsgstructure",
                    "type": "String",
                    "title": "OutMessageStructure",
                    "title_de": "Ausgangs-Nachricht-Struktur",
                    "value": "",
                    "description": "This defines the nature of the Item. Possible values are Physical or Information. The default value is Information.",
                    "description_de": "Beim Typ der Nachricht kann zwischen Physisch und Information unterschieden werden.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "outmsgimport",
                    "type": "Complex",
                    "title": "OutMessageImport",
                    "title_de": "Ausgangs-Nachricht-Import",
                    "value": "",
                    "description": "Identifies the location of the data structure and its format. If the importType attribute is left unspecified, the typeLanguage specified in the Definitions is assumed.",
                    "description_de": "Definiert den Ort der Datenstruktur und ihr Format.",
                    "readonly": false,
                    "optional": true,
                    "complexItems": [
                        {
                            "id": "c1",
                            "type": "String",
                            "width": 200,
                            "value": "",
                            "name": "ImportType",
                            "name_de": "Importtyp"
                        },
                        {
                            "id": "c2",
                            "type": "String",
                            "width": 100,
                            "value": "",
                            "name": "Location"
                        },
                        {
                            "id": "c3",
                            "type": "String",
                            "width": 200,
                            "value": "",
                            "name": "Namespace",
                            "name_de": "Namensraum"
                        }
                    ]
                },
                {
                    "id": "outmsgiscollection",
                    "type": "Boolean",
                    "title": "OutMessageIsCollection",
                    "title_de": "Ausgangs-Nachricht-Ist-Liste",
                    "value": false,
                    "description": "Setting this flag to true indicates that the actual data type is a collection.",
                    "description_de": "Ture signalisiert, dass der Datentyp eine Liste ist.",
                    "readonly": false,
                    "optional": true
                }
            ]
        },
        {
            "name": "loopcharacteristics",
            "properties": [
                {
                    "id": "looptype",
                    "type": "Choice",
                    "title": "LoopType",
                    "title_de": "Schleifentyp",
                    "value": "None",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "",
                    "items": [
                        {
                            "id": "c1",
                            "title": "None",
                            "title_de": "Keine Schleife",
                            "value": "None",
                            "refToView": "none"
                        },
                        {
                            "id": "c2",
                            "title": "Standard",
                            "title_de": "Standard",
                            "value": "Standard",
                            "icon": "activity/list/looptype.standard.png",
                            "refToView": "loop"
                        },
                        {
                            "id": "c3",
                            "title": "MI Parallel",
                            "title_de": "MI parallel",
                            "value": "Parallel",
                            "icon": "activity/list/mi.parallel.png",
                            "refToView": "parallel"
                        },
                        {
                            "id": "c4",
                            "title": "MI Sequential",
                            "title_de": "MI sequentialisiert",
                            "value": "Sequential",
                            "icon": "activity/list/mi.sequential.png",
                            "refToView": "sequential"
                        }
                    ]
                },
                {
                    "id": "testbefore",
                    "type": "Boolean",
                    "title": "TestBefore",
                    "title_de": "",
                    "value": false,
                    "description": "Flag that controls whether the loop condition is evaluated at the beginning (testBefore = true) or at the end (testBefore = false)of the loop iteration.",
                    "description_de": "Gibt an ob die Schleifen-Bedingung vor (true) oder nach (false) dem Schleifendurchlauf überprüft wird."
                },
                {
                    "id": "loopcondition",
                    "type": "String",
                    "title": "LoopCondition",
                    "title_de": "Schleifenbedingung",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false
                },
                {
                    "id": "loopmaximum",
                    "type": "Integer",
                    "title": "LoopMaximum",
                    "title_de": "Schleifenmaximum",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "min": "0"
                },
                {
                    "id": "loopcardinality",
                    "type": "String",
                    "title": "LoopCardinality",
                    "title_de": "Anzahl Schleifen",
                    "value": "",
                    "description": "A numeric Expression that controls the number of Activity instances that will be created. This Expression MUST evaluate to an integer.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "loopdatainput",
                    "type": "String",
                    "title": "LoopDataInput",
                    "title_de": "Schleifen-Datan-Eingabe",
                    "value": "",
                    "description": "A reference to a DataInput which is part of the Activity’s InputOutputSpecification. This DataInput is used to determine the number of Activity instances, one Activity instance per item in the collection of data stored in that DataInput element.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "loopdataoutput",
                    "type": "String",
                    "title": "LoopDataInput",
                    "title_de": "Schleifen-Datan-Ausgabe",
                    "value": "",
                    "description": "A reference to a DataOutput which is part of the Activity’s InputOutputSpecification.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "inputdataitem",
                    "type": "String",
                    "title": "InputDataItem",
                    "title_de": "Eingabe-Daten-Element",
                    "value": "",
                    "description": "A Property, representing for every Activity instance the single item of the collection stored in the loopDataInput.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "outputdataitem",
                    "type": "String",
                    "title": "InputDataItem",
                    "title_de": "Ausgabe-Daten-Element",
                    "value": "",
                    "description": "A Property, representing for every Activity instance the single item of the collection stored in the loopDataOutput.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "behavior",
                    "type": "Choice",
                    "title": "Behavior",
                    "title_de": "Schleifen-Verhalten",
                    "description": "The attribute behavior acts as a shortcut for specifying when events shall be thrown from an Activity instance that is about to complete. It can assume values of none, one, all, and complex.",
                    "description_de": "Das Schleifen-Verhalten definiert das Auslöseverhalten von Ereignissen, wenn die Instanz einer Aktivität beendet wird. Mögliche Werte sind none, one, all und complex.",
                    "value": "all",
                    "items": [
                        {
                            "id": "cnone",
                            "value": "None",
                            "title": "None"
                        },
                        {
                            "id": "cone",
                            "value": "One",
                            "title": "One"
                        },
                        {
                            "id": "call",
                            "value": "All",
                            "title": "All"
                        },
                        {
                            "id": "ccomplex",
                            "value": "Complex",
                            "title": "Complex"
                        }
                    ]
                },
                {
                    "id": "complexbehaviordefinition",
                    "type": "Complex",
                    "title": "ComplexBehaviorDefinition:",
                    "title_de": "Komplexe Verhaltensdefinition",
                    "description": "Controls when and which Events are thrown in case behavior is set to complex.",
                    "description_de": "Kontrolliert wann und welche Ereignisse ausgelöst werden, wenn das Verhalten complex ausgewählt ist.",
                    "value": "",
                    "optional": true,
                    "readonly": false,
                    "complexItems": [
                        {
                            "id": "cexpression",
                            "type": "String",
                            "width": 200,
                            "value": "",
                            "name": "Condition",
                            "name_de": "Bedingung"
                        },
                        {
                            "id": "ceventdefinition",
                            "type": "Choice",
                            "value": "signal",
                            "width": 100,
                            "name": "EventDefinition",
                            "name_de": "Ereignis-Definition",
                            "items": [
                                {
                                    "id": "cnone",
                                    "value": "None",
                                    "title": "None"
                                },
                                {
                                    "id": "cmessage",
                                    "value": "Message",
                                    "title": "Message"
                                },
                                {
                                    "id": "cescalation",
                                    "value": "Escalation",
                                    "title": "Escalation"
                                },
                                {
                                    "id": "cerror",
                                    "value": "Error",
                                    "title": "Error"
                                },
                                {
                                    "id": "ccancel",
                                    "value": "Cancel",
                                    "title": "Cancel"
                                },
                                {
                                    "id": "ccompensation",
                                    "value": "Compensation",
                                    "title": "Compensation"
                                },
                                {
                                    "id": "csignal",
                                    "value": "Signal",
                                    "title": "Signal"
                                },
                                {
                                    "id": "cterminate",
                                    "value": "Terminate",
                                    "title": "Terminate"
                                }
                            ]
                        }
                    ]
                },
                {
                    "id": "completioncondition",
                    "type": "String",
                    "title": "CompletionCondition:",
                    "title_de": "Beendigungsbedingung",
                    "description": "This attribute defines a Boolean Expression that when evaluated to true, cancels the remaining Activity instances and produces a token.",
                    "description_de": "Alle verbleibenden Aktivitätsinstanzen werden abgebrochen, falls die hier definierte Bedingung wahr wird.",
                    "value": ""
                },
                {
                    "id": "onebehavioreventref:",
                    "type": "Choice",
                    "value": "signal",
                    "title": "OneBehaviorEventRef",
                    "title_de": "Einzel-Verhalten-Ereignis",
                    "description": "The EventDefinition which is thrown when behavior is set to one and the first internal Activity instance has completed.",
                    "items": [
                        {
                            "id": "cnone",
                            "value": "None",
                            "title": "None"
                        },
                        {
                            "id": "cmessage",
                            "value": "Message",
                            "title": "Message"
                        },
                        {
                            "id": "cescalation",
                            "value": "Escalation",
                            "title": "Escalation"
                        },
                        {
                            "id": "cerror",
                            "value": "Error",
                            "title": "Error"
                        },
                        {
                            "id": "ccancel",
                            "value": "Cancel",
                            "title": "Cancel"
                        },
                        {
                            "id": "ccompensation",
                            "value": "Compensation",
                            "title": "Compensation"
                        },
                        {
                            "id": "csignal",
                            "value": "Signal",
                            "title": "Signal"
                        },
                        {
                            "id": "cterminate",
                            "value": "Terminate",
                            "title": "Terminate"
                        }
                    ]
                },
                {
                    "id": "nonebehavioreventref",
                    "type": "Choice",
                    "value": "signal",
                    "title": "NoneBehaviorEventRef",
                    "title_de": "Ohne-Verhalten-Ereignis",
                    "items": [
                        {
                            "id": "cnone",
                            "value": "None",
                            "title": "None"
                        },
                        {
                            "id": "cmessage",
                            "value": "Message",
                            "title": "Message"
                        },
                        {
                            "id": "cescalation",
                            "value": "Escalation",
                            "title": "Escalation"
                        },
                        {
                            "id": "cerror",
                            "value": "Error",
                            "title": "Error"
                        },
                        {
                            "id": "ccancel",
                            "value": "Cancel",
                            "title": "Cancel"
                        },
                        {
                            "id": "ccompensation",
                            "value": "Compensation",
                            "title": "Compensation"
                        },
                        {
                            "id": "csignal",
                            "value": "Signal",
                            "title": "Signal"
                        },
                        {
                            "id": "cterminate",
                            "value": "Terminate",
                            "title": "Terminate"
                        }
                    ]
                }
            ]
        },
        {
            "name": "task",
            "properties": [
                {
                    "id": "tasktype",
                    "type": "Choice",
                    "title": "TaskType",
                    "title_de": "Tasktyp",
                    "value": "None",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "",
                    "items": [
                        {
                            "id": "c1",
                            "title": "None",
                            "title_de": "Kein Typ",
                            "value": "None",
                            "refToView": "none"
                        },
                        {
                            "id": "c2",
                            "title": "Send",
                            "title_de": "Sendend",
                            "value": "Send",
                            "icon": "activity/list/type.send.png",
                            "refToView": "sendTask"
                        },
                        {
                            "id": "c3",
                            "title": "Receive",
                            "title_de": "Empfangend",
                            "value": "Receive",
                            "icon": "activity/list/type.receive.png",
                            "refToView": "receiveTask"
                        },
                        {
                            "id": "c4",
                            "title": "User",
                            "title_de": "Benutzer",
                            "value": "User",
                            "icon": "activity/list/type.user.png",
                            "refToView": "userTask"
                        },
                        {
                            "id": "c5",
                            "title": "Manual",
                            "title_de": "Manuell",
                            "value": "Manual",
                            "icon": "activity/list/type.manual.png",
                            "refToView": "manualTask"
                        },
                        {
                            "id": "c6",
                            "title": "Service",
                            "title_de": "Service",
                            "value": "Service",
                            "icon": "activity/list/type.service.png",
                            "refToView": "serviceTask"
                        },
                        {
                            "id": "c7",
                            "title": "Business Rule",
                            "title_de": "Geschäftsregel",
                            "value": "Business Rule",
                            "icon": "activity/list/type.business.rule.png",
                            "refToView": "businessRuleTask"
                        },
                        {
                            "id": "c8",
                            "title": "Script",
                            "title_de": "Skript",
                            "value": "Script",
                            "icon": "activity/list/type.script.png",
                            "refToView": "scriptTask"
                        }
                    ]
                },
                {
                    "id": "implementation",
                    "type": "Choice",
                    "title": "Implementation",
                    "title_de": "Implementierung",
                    "value": "webService",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "",
                    "items": [
                        {
                            "id": "c1",
                            "title": "HumanTaskWebService",
                            "value": "humanTaskWebService",
                            "refToView": ""
                        },
                        {
                            "id": "c2",
                            "title": "BuisnessRuleWebService",
                            "value": "BuisnessRuleWebService",
                            "refToView": ""
                        },
                        {
                            "id": "c1",
                            "title": "WebService",
                            "value": "webService",
                            "refToView": ""
                        },
                        {
                            "id": "c2",
                            "title": "Other",
                            "value": "other",
                            "refToView": ""
                        },
                        {
                            "id": "c2",
                            "title": "Unspecified",
                            "value": "unspecified",
                            "refToView": ""
                        }
                    ]
                },
                {
                    "id": "resources",
                    "type": "Complex",
                    "title": "Resources",
                    "title_de": "Ressourcen",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "complexItems": [
                        {
                            "id": "resource_type",
                            "name": "Type",
                            "name_de": "Typ",
                            "type": "Choice",
                            "value": "",
                            "width": 100,
                            "optional": false,
                            "items": [
                                {
                                    "id": "c1",
                                    "title": "Performer",
                                    "title_de": "Performer",
                                    "value": "Performer",
                                    "refToView": ""
                                },
                                {
                                    "id": "c2",
                                    "title": "HumanPerformer",
                                    "title_de": "HumanPerformer",
                                    "value": "HumanPerformer",
                                    "refToView": ""
                                },
                                {
                                    "id": "c3",
                                    "title": "PotentialOwner",
                                    "title_de": "PotentialOwner",
                                    "value": "PotentialOwner",
                                    "refToView": ""
                                }
                            ]
                        },
                        {
                            "id": "resource",
                            "name": "Resource",
                            "name_de": "Ressource",
                            "type": "String",
                            "value": "",
                            "width": 200,
                            "optional": true
                        },
                        {
                            "id": "resourceassignmentexpr",
                            "name": "ResourceAssignmentExpression",
                            "type": "String",
                            "value": "",
                            "width": 200,
                            "optional": true
                        },
                        {
                            "id": "language",
                            "name": "Language",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": true
                        },
                        {
                            "id": "evaluatestotype",
                            "name": "EvaluatesToType",
                            "type": "String",
                            "value": "",
                            "width": 200,
                            "optional": true
                        }
                    ]
                },
                {
                    "id": "messageref",
                    "type": "String",
                    "title": "MessageRef",
                    "title_de": "Nachrichten-Referenz",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "",
                    "length": "50"
                },
                {
                    "id": "operationref",
                    "type": "String",
                    "title": "OperationRef",
                    "title_de": "Operations-Referenz",
                    "value": "",
                    "description": "ID-Reference to an operation definition.",
                    "description_de": "ID-Referenz zur Definition einer Operation.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "instantiate",
                    "type": "Boolean",
                    "title": "Instantiate",
                    "title_de": "Instanziieren",
                    "value": false,
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": ""
                },
                {
                    "id": "script",
                    "type": "Text",
                    "title": "Script",
                    "title_de": "Skript",
                    "value": "",
                    "description": "Script that can be run when the Task is performed. Related to the Script TaskType, if a script is not included, then the Task will act equivalent to a TaskType of None.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "script_language",
                    "type": "String",
                    "title": "ScriptLanguage",
                    "title_de": "Skript Sprache",
                    "value": "",
                    "description": "Defines the script language. The script language MUST be provided if a script is provided.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "bgcolor",
                    "type": "Color",
                    "title": "BackgroundColor",
                    "title_de": "Hintergrundfarbe",
                    "value": "#ffffcc",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "fill_el",
                    "fill": true,
                    "stroke": false
                }
            ]
        },
        {
            "name": "subprocess",
            "properties": [
                {
                    "id": "subprocesstype",
                    "type": "Choice",
                    "title": "subProcessType",
                    "title_de": "Subprozesstyp",
                    "value": "Embedded",
                    "description": "SubProcessType is an attribute that defines whether the Sub-Process details are embedded within the higher level Process or refers to another, re-usable Process. The default is Embedded.",
                    "description_de": "Der Subprozesstyp gibt an, ob die Subprozessdetails in einen übergeordneten Prozess eingebettet sind oder auf einen anderen wiederverwendbaren Prozess verweisen.",
                    "optional": false,
                    "refToView": "",
                    "items": [
                        {
                            "id": "choice1",
                            "title": "Embedded",
                            "value": "Embedded"
                        },
                        {
                            "id": "choice2",
                            "title": "Independent",
                            "value": "Independent"
                        },
                        {
                            "id": "choice3",
                            "title": "Reference",
                            "value": "Reference"
                        }
                    ]
                },
                {
                    "id": "isatransaction",
                    "type": "Boolean",
                    "title": "is a Transaction",
                    "title_de": "ist eine Transaktion",
                    "value": false,
                    "description": "A Transaction is a set of activities that logically belongs together; it might follow a specified transaction protocol.",
                    "readonly": false,
                    "optional": false,
                    "refToView": "border"
                },
                {
                    "id": "transaction",
                    "type": "String",
                    "title": "TransactionRef",
                    "title_de": "Transaktions-Referenz",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50"
                },
                {
                    "id": "transactionmethod",
                    "type": "Choice",
                    "title": "TransactionMethod",
                    "title_de": "Transaktions-Methode",
                    "value": "compensate",
                    "description": "The technique that will be used to undo a transaction that has been cancelled.",
                    "readonly": false,
                    "optional": true,
                    "items": [
                        {
                            "id": "c1",
                            "title": "Compensate",
                            "value": "compensate"
                        },
                        {
                            "id": "c2",
                            "title": "Store",
                            "value": "store"
                        },
                        {
                            "id": "c3",
                            "title": "Image",
                            "value": "image"
                        }
                    ]
                },
                {
                    "id": "isadhoc",
                    "type": "Boolean",
                    "title": "isAdHoc",
                    "title_de": "ist Ad-hoc",
                    "value": false,
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "adhoc"
                },
                {
                    "id": "adhocordering",
                    "type": "Choice",
                    "title": "AdHocOrdering",
                    "title_de": "Ad-hoc Anordnung",
                    "value": "Sequential",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "",
                    "items": [
                        {
                            "id": "c1",
                            "title": "Sequential",
                            "title_de": "sequentiell",
                            "value": "sequential"
                        },
                        {
                            "id": "c2",
                            "title": "Parallel",
                            "title_de": "parallel",
                            "value": "parallel"
                        }
                    ]
                },
                {
                    "id": "adhoccompletioncondition",
                    "type": "String",
                    "title": "AdHocCompletionCondition",
                    "title_de": "Ad-hoc Fertigstellungsbedingung",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": ""
                },
                {
                    "id": "adhoccancelremaininginstances",
                    "type": "Boolean",
                    "title": "AdhocCancelRemainingInstances",
                    "title_de": "Ad-hoc Abbruch laufender Instanzen",
                    "value": true,
                    "description": "This attribute is used only if ordering is parallel. It determines whether running instances are cancelled when the completionCondition becomes true.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "entry",
                    "type": "DiagramLink",
                    "title": "SubProcessRef",
                    "title_de": "Subprozess-Referenz",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "u"
                },
                {
                    "id": "diagramref",
                    "type": "String",
                    "title": "DiagramRef",
                    "title_de": "Diagramm-Referenz",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": ""
                },
                {
                    "id": "processref",
                    "type": "String",
                    "title": "ProcessRef",
                    "title_de": "Prozess-Referenz",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": ""
                },
                {
                    "id": "inputmaps",
                    "type": "String",
                    "title": "InputMaps",
                    "title_de": "Eingabe-Mengen",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": ""
                },
                {
                    "id": "outputmaps",
                    "type": "String",
                    "title": "OutputMaps",
                    "title_de": "Ausgabe-Mengen",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": ""
                }
            ]
        },
        {
            "name": "gateway",
            "properties": [
                {
                    "id": "assignments",
                    "type": "Complex",
                    "title": "Assignments",
                    "title_de": "Zuweisungen",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "complexItems": [
                        {
                            "id": "to",
                            "name": "To",
                            "name_de": "Auf",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "from",
                            "name": "From",
                            "name_de": "Aus",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "assigntime",
                            "name": "AssignTime",
                            "name_de": "Zuweisungszeit",
                            "type": "Choice",
                            "value": "Start",
                            "width": 100,
                            "optional": true,
                            "items": [
                                {
                                    "id": "c1",
                                    "title": "Start",
                                    "title_de": "Start",
                                    "value": "Start",
                                    "refToView": ""
                                },
                                {
                                    "id": "c2",
                                    "title": "End",
                                    "title_de": "Ende",
                                    "value": "End",
                                    "refToView": ""
                                }
                            ]
                        }
                    ]
                },
                {
                    "id": "pool",
                    "type": "String",
                    "title": "Pool",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "length": ""
                },
                {
                    "id": "lanes",
                    "type": "String",
                    "title": "Lanes",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "length": ""
                },
                {
                    "id": "gates",
                    "type": "String",
                    "title": "Gates",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50",
                    "wrapLines": true
                },
                {
                    "id": "gates_outgoingsequenceflow",
                    "type": "String",
                    "title": "[Gates] OutgoingSequenceFlow",
                    "title_de": "[Gates] Ausgehender Steuerfluss",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50",
                    "wrapLines": true
                },
                {
                    "id": "gates_assignments",
                    "type": "String",
                    "title": "[Gates] Assignments",
                    "title_de": "[Gates] Zuweisungen",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50",
                    "wrapLines": true
                }
            ]
        },
        {
            "name": "artifact",
            "properties": [
                {
                    "id": "pool",
                    "type": "String",
                    "title": "Pool",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "length": ""
                },
                {
                    "id": "lanes",
                    "type": "String",
                    "title": "Lanes",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "length": ""
                }
            ]
        },
        {
            "name": "process",
            "properties": [
                {
                    "id": "processtype",
                    "type": "Choice",
                    "title": "ProcessType",
                    "title_de": "Prozesstyp",
                    "value": "None",
                    "description": "The processType attribute Provides additional information about the level of abstraction modeled by this Process.",
                    "description_de": "Beschreibt den Abstraktionsgrad des beinhaltenden Prozesses.",
                    "readonly": false,
                    "optional": false,
                    "popular": true,
                    "items": [
                        {
                            "id": "c1",
                            "title": "None",
                            "value": "None"
                        },
                        {
                            "id": "c2",
                            "title": "Executable",
                            "value": "Executable"
                        },
                        {
                            "id": "c3",
                            "title": "Non-Executable",
                            "value": "Non-Executable"
                        },
                        {
                            "id": "c4",
                            "title": "Public",
                            "value": "Public"
                        }
                    ]
                },
                {
                    "id": "isclosed",
                    "type": "Boolean",
                    "title": "isClosed",
                    "title_de": "IstGeschlossen",
                    "value": false,
                    "description": "A Boolean value specifying whether interactions, such as sending and receiving Messages and Events, not modeled in the Process can occur when the Process is executed or performed. If the value is true, they MAY NOT occur. If the value is false, they MAY occur.",
                    "readonly": false,
                    "optional": false
                }
            ]
        },
        {
            "name": "pool",
            "properties": [
                {
                    "id": "multiinstance",
                    "type": "Boolean",
                    "title": "is Multi Instance Participant",
                    "title_de": "ist Mehrfach-Beteiligung",
                    "value": false,
                    "description": "",
                    "description_de": "Legt fest, ob der Teilnehmer mehrfach beteiligt ist (Multi Instance).",
                    "readonly": false,
                    "optional": true,
                    "refToView": "multiInstance"
                },
                {
                    "id": "boundaryvisible",
                    "type": "Boolean",
                    "title": "BoundaryVisible",
                    "title_de": "Umrandung sichtbar",
                    "value": true,
                    "description": "Defines if the rectangular boundary for the Pool is visible.",
                    "description_de": "Gibt an, ob die rechteckige Umrandung des Pools sichtbar ist.",
                    "readonly": false,
                    "optional": false,
                    "refToView": ["border", "c", "caption", "captionDisableAntialiasing"],
                    "visible": false
                },
                {
                    "id": "processname",
                    "type": "String",
                    "title": "ProcessName",
                    "title_de": "Prozessname",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "",
                    "length": "30"
                },
                {
                    "id": "status",
                    "type": "Choice",
                    "title": "Status",
                    "value": "None",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "popular": true,
                    "items": [
                        {
                            "id": "c1",
                            "title": "None",
                            "value": "None"
                        },
                        {
                            "id": "c2",
                            "title": "Ready",
                            "value": "Ready"
                        },
                        {
                            "id": "c3",
                            "title": "Active",
                            "value": "Active"
                        },
                        {
                            "id": "c4",
                            "title": "Cancelled",
                            "value": "Cancelled"
                        },
                        {
                            "id": "c5",
                            "title": "Aborting",
                            "value": "Aborting"
                        },
                        {
                            "id": "c6",
                            "title": "Aborted",
                            "value": "Aborted"
                        },
                        {
                            "id": "c7",
                            "title": "Completing",
                            "value": "Completing"
                        },
                        {
                            "id": "c8",
                            "title": "Completed",
                            "value": "Completed"
                        }
                    ]
                },
                {
                    "id": "adhoc",
                    "type": "Boolean",
                    "title": "AdHoc",
                    "value": false,
                    "description": "",
                    "readonly": false,
                    "optional": false
                },
                {
                    "id": "adhocordering",
                    "type": "Choice",
                    "title": "AdHocOrdering",
                    "title_de": "Ad-Hoc Anordnung",
                    "value": "Parallel",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "items": [
                        {
                            "id": "c1",
                            "title": "Sequential",
                            "value": "Sequential",
                            "refToView": ""
                        },
                        {
                            "id": "c2",
                            "title": "Parallel",
                            "value": "Parallel",
                            "refToView": ""
                        }
                    ]
                },
                {
                    "id": "adhoccompletioncondition",
                    "type": "String",
                    "title": "AdHocCompletionCondition",
                    "title_de": "Ad-hoc Fertigstellungsbedingung",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50"
                },
                {
                    "id": "suppressjoinfailure",
                    "type": "Boolean",
                    "title": "SuppressJoinFailure",
                    "value": false,
                    "description": "",
                    "readonly": false,
                    "optional": false
                },
                {
                    "id": "enableinstancecompensation",
                    "type": "Boolean",
                    "title": "EnableBooleanCompensation",
                    "value": false,
                    "description": "",
                    "readonly": false,
                    "optional": false
                },
                {
                    "id": "processcategories",
                    "type": "String",
                    "title": "ProcessCategories",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50",
                    "wrapLines": true
                },
                {
                    "id": "processdocumentation",
                    "type": "String",
                    "title": "Process Documentation",
                    "title_de": "Prozess-Dokumentation",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "",
                    "wrapLines": true
                }
            ]
        },
        {
            "name": "dataAssociation",
            "properties": [
                {
                    "id": "assignments",
                    "type": "Complex",
                    "title": "Assignments",
                    "title_de": "Zuweisungen",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "popular": true,
                    "complexItems": [
                        {
                            "id": "to",
                            "name": "To",
                            "name_de": "Auf",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "from",
                            "name": "From",
                            "name_de": "Aus",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": false
                        },
                        {
                            "id": "language",
                            "name": "Language",
                            "name_de": "Sprache",
                            "type": "String",
                            "value": "",
                            "width": 100,
                            "optional": true
                        }
                    ]
                },
                {
                    "id": "transformation",
                    "title": "Transformation",
                    "type": "String",
                    "value": "",
                    "optional": true,
                    "popular": true
                }
            ]
        }
    ],
    "stencils": [
        {
            "type": "node",
            "id": "BPMNDiagram",
            "title": "BPMN-Diagram",
            "title_de": "BPMN-Diagramm",
            "groups": ["Diagram"],
            "description": "A BPMN 2.0 Diagram.",
            "description_de": "Ein BPMN 2.0 Diagramm",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns=\"http://www.w3.org/2000/svg\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:xlink=\"http://www.w3.org/1999/xlink\"    width=\"800\"    height=\"600\"    version=\"1.0\">   <defs></defs>   <g pointer-events=\"fill\" >     <polygon stroke=\"black\" fill=\"black\" stroke-width=\"1\" points=\"0,0 0,590 9,599 799,599 799,9 790,0\" stroke-linecap=\"butt\" stroke-linejoin=\"miter\" stroke-miterlimit=\"10\" />     <rect id=\"diagramcanvas\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"790\" height=\"590\" stroke=\"black\" stroke-width=\"2\" fill=\"white\" />      <text font-size=\"22\" id=\"diagramtext\" x=\"400\" y=\"25\" oryx:align=\"top center\" stroke=\"black\"></text>   </g> </svg> ",
            "icon": "diagram.png",
            "mayBeRoot": true,
            "hide": true,
            "propertyPackages": ["baseAttributes", "diagram"],
            "roles": ["canContainArtifacts"]
        },
        {
            "type": "node",
            "id": "Task",
            "title": "Task",
            "title_de": "Task",
            "groups": ["Activities"],
            "groups_de": ["Aktivitäten"],
            "description": "A task is a unit of work - the job to be performed.",
            "description_de": "Eine Task ist eine Arbeitseinheit. Sie repräsentiert die Aufgabe, die zu tun ist.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns=\"http://www.w3.org/2000/svg\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:xlink=\"http://www.w3.org/1999/xlink\"     width=\"102\"    height=\"82\"    version=\"1.0\">   <defs></defs>   <oryx:magnets>    <oryx:magnet oryx:cx=\"1\" oryx:cy=\"20\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"1\" oryx:cy=\"40\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"1\" oryx:cy=\"60\" oryx:anchors=\"left\" />        <oryx:magnet oryx:cx=\"25\" oryx:cy=\"79\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"50\" oryx:cy=\"79\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"75\" oryx:cy=\"79\" oryx:anchors=\"bottom\" />        <oryx:magnet oryx:cx=\"99\" oryx:cy=\"20\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"99\" oryx:cy=\"40\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"99\" oryx:cy=\"60\" oryx:anchors=\"right\" />        <oryx:magnet oryx:cx=\"25\" oryx:cy=\"1\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"50\" oryx:cy=\"1\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"75\" oryx:cy=\"1\" oryx:anchors=\"top\" />        <oryx:magnet oryx:cx=\"50\" oryx:cy=\"40\" oryx:default=\"yes\" />   </oryx:magnets>   <g pointer-events=\"fill\" oryx:minimumSize=\"50 40\">    <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffcc\" stop-opacity=\"1\"/>   </radialGradient>  </defs>    <rect id=\"text_frame\" oryx:anchors=\"bottom top right left\" x=\"1\" y=\"1\" width=\"94\" height=\"79\" rx=\"10\" ry=\"10\" stroke=\"none\" stroke-width=\"0\" fill=\"none\" />     <rect id=\"callActivity\" oryx:resize=\"vertical horizontal\" oryx:anchors=\"bottom top right left\" x=\"0\" y=\"0\" width=\"100\" height=\"80\" rx=\"10\" ry=\"10\" stroke=\"black\" stroke-width=\"4\" fill=\"none\" />  <rect id=\"bg_frame\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"100\" height=\"80\" rx=\"10\" ry=\"10\" stroke=\"black\" stroke-width=\"1\" fill=\"url(#background) #ffffcc\" />   <text     font-size=\"12\"     id=\"text_name\"     x=\"50\"     y=\"40\"     oryx:align=\"middle center\"    oryx:fittoelem=\"text_frame\"    stroke=\"black\">   </text>     <g id=\"manualTask\" transform=\"scale(0.7,0.7) translate(8,8)\">      <path oryx:anchors=\"top left\" id=\"hand\"  style=\"opacity:1;fill:none;fill-opacity:1;stroke:#000000;stroke-width:1\"     d=\"M0.5,3.751l4.083-3.25c0,0,11.166,0.083,12.083,0.083s-2.417,2.917-1.5,2.917     s11.667,0,12.584,0c1.166,1.708-0.168,3.167-0.834,3.667s0.875,1.917-1,4.417c-0.75,0.25,0.75,1.875-1.333,3.333     c-1.167,0.583,0.583,1.542-1.25,2.833c-1.167,0-20.833,0.083-20.833,0.083l-2-1.333V3.751z\"/>   <path oryx:anchors=\"top left\" id=\"finger\" style=\"opacity:1;fill:none; stroke:#000000; stroke-width:2\" d=\"M 13.5 7 L 27 7\" />   <path oryx:anchors=\"top left\" id=\"finger1\" style=\"opacity:1;fill:none; stroke:#000000; stroke-width:2\" d=\"M 13.5 11 L 26 11\" />   <path oryx:anchors=\"top left\" id=\"finger2\" style=\"opacity:1;fill:none; stroke:#000000; stroke-width:1.5\" d=\"M 14 14.5 L 25 14.5\" />   <path oryx:anchors=\"top left\" id=\"thumb\" style=\"opacity:1;fill:none; stroke:#000000; stroke-width:1.5\" d=\"M 8.2 3.1 L 15 3.1\" />  </g>    <g id=\"businessRuleTask\" transform=\"scale(0.7,0.7) translate(8,8)\">   <rect oryx:anchors=\"top left\" id=\"top\" x=\"0\" y=\"0\" width=\"22\" height=\"4\" style=\"opacity:1;fill:#B3B1B3;fill-opacity:1;stroke:#000000\"/>   <rect oryx:anchors=\"top left\" id=\"rect\" x=\"0\" y=\"4\" style=\"opacity:1;fill:none;stroke:#000000\" width=\"22\" height=\"12\"/>   <path oryx:anchors=\"top left\" id=\"row\" style=\"opacity:1;fill:none;stroke:#000000\" d=\"M 0 10 L 22 10\" />   <path oryx:anchors=\"top left\" id=\"col\" style=\"opacity:1; fill:none; stroke:#000000\" d=\"M 7 4 L 7 16\" />  </g>    <g id=\"scriptTask\" transform=\"scale(0.7,0.7) translate(8,8)\">   <path oryx:anchors=\"top left\" id=\"paper\" style=\"opacity:1;fill:none;stroke:#000000\"    d=\"M6.402,0.5h14.5c0,0-5.833,2.833-5.833,5.583s4.417,6,4.417,9.167    s-4.167,5.083-4.167,5.083H0.235c0,0,5-2.667,5-5s-4.583-6.75-4.583-9.25S6.402,0.5,6.402,0.5z\"/>   <path oryx:anchors=\"top left\" id=\"line1\" style=\"opacity:1;fill:none;stroke:#000000;stroke-width:1.5\" d=\"M 3.5 4.5 L 13.5 4.5\" />   <path oryx:anchors=\"top left\" id=\"line2\" style=\"opacity:1;fill:none;stroke:#000000;stroke-width:1.5\" d=\"M 3.8 8.5 L 13.8 8.5\" />   <path oryx:anchors=\"top left\"  id=\"line3\" style=\"opacity:1;fill:none;stroke:#000000;stroke-width:1.5\" d=\"M 6.3 12.5 L 16.3 12.5\" />   <path oryx:anchors=\"top left\" id=\"line4\" style=\"opacity:1;fill:none;stroke:#000000;stroke-width:1.5\" d=\"M 6.5 16.5 L 16.5 16.5\" />  </g>    <g id=\"userTask\" transform=\"scale(0.7,0.7) translate(8,8)\">   <path oryx:anchors=\"top left\" style=\"opacity:1;fill:#F4F6F7;stroke:#000000\"    d=\"M0.585,24.167h24.083v-7.833c0,0-2.333-3.917-7.083-5.167h-9.25    c-4.417,1.333-7.833,5.75-7.833,5.75L0.585,24.167z\"/>   <path oryx:anchors=\"top left\" style=\"opacity:1;fill:none;stroke:#000000\" d=\"M 6 20 L 6 24\" />   <path oryx:anchors=\"top left\" style=\"opacity:1;fill:none;stroke:#000000\" d=\"M 20 20 L 20 24\" />   <circle oryx:anchors=\"top left\" fill=\"#000000\" stroke=\"#000000\" cx=\"13.002\" cy=\"5.916\" r=\"5.417\"/>   <path oryx:anchors=\"top left\" style=\"opacity:1;fill:#F0EFF0;stroke:#000000\"   d=\"M8.043,7.083c0,0,2.814-2.426,5.376-1.807s4.624-0.693,4.624-0.693    c0.25,1.688,0.042,3.75-1.458,5.584c0,0,1.083,0.75,1.083,1.5s0.125,1.875-1,3s-5.5,1.25-6.75,0S8.668,12.834,8.668,12    s0.583-1.25,1.25-1.917C8.835,9.5,7.419,7.708,8.043,7.083z\"/>  </g>    <g id=\"serviceTask\" transform=\"scale(0.7,0.7) translate(8,8)\">   <polygon oryx:anchors=\"top left\" id=\"teethForeground\" style=\"opacity:1;fill:#ffffff;stroke:#000000\" points=\"15.392,5.064 17.954,2.502 20.347,4.895 17.786,7.455     18.729,9.732 22.353,9.732 22.353,13.115 18.731,13.115 17.788,15.392 20.351,17.955 17.958,20.347 15.397,17.786 13.12,18.729     13.12,22.353 9.737,22.353 9.737,18.731 7.46,17.788 4.897,20.35 2.506,17.958 5.066,15.397 4.124,13.12 0.5,13.12 0.5,9.737     4.121,9.737 5.065,7.461 2.503,4.898 4.895,2.506 7.455,5.066 9.732,4.125 9.732,0.5 13.116,0.5 13.116,4.121 \"/>   <circle oryx:anchors=\"top left\" id=\"ringForeground\" style=\"opacity:1;fill:none;stroke:#000000\" cx=\"11.427\" cy=\"11.426\" r=\"3.714\"/>   <polygon oryx:anchors=\"top left\" id=\"teethBackground\" style=\"opacity:1;fill:#ffffff;stroke:#000000\" points=\"21.392,11.064 23.954,8.502 26.347,10.895 23.786,13.455     24.729,15.732 28.353,15.732 28.353,19.115 24.731,19.115 23.788,21.392 26.351,23.955 23.958,26.347 21.397,23.786 19.12,24.729     19.12,28.353 15.737,28.353 15.737,24.731 13.46,23.788 10.897,26.35 8.506,23.958 11.066,21.397 10.124,19.12 6.5,19.12     6.5,15.737 10.121,15.737 11.065,13.461 8.503,10.898 10.895,8.506 13.455,11.066 15.732,10.125 15.732,6.5 19.116,6.5     19.116,10.121 \"/>   <circle oryx:anchors=\"top left\" id=\"ringBackground\" style=\"opacity:1;fill:none;stroke:#000000\" cx=\"17.427\" cy=\"17.426\" r=\"3.714\"/>  </g>    <g id=\"sendTask\">   <path oryx:anchors=\"left top\" stroke=\"white\" fill=\"black\" stroke-width=\"1\" d=\"M8,11 L8,21 L24,21 L24,11 L16,17z\"/>   <path oryx:anchors=\"left top\" stroke=\"white\" fill=\"black\" stroke-width=\"1\" d=\"M7,10 L16,17 L25 10z\"/>  </g>    <g id=\"receiveTask\">   <path oryx:anchors=\"left top\" stroke=\"black\" fill=\"none\" stroke-width=\"1\" d=\"M8,11 L8,21 L24,21 L24,11z M8,11 L16,17 L24,11\" />  </g>    <g id=\"none\"></g>  <g        id=\"loop\">       <path          oryx:anchors=\"bottom\"          style=\"opacity:1;fill:none;fill-opacity:1;stroke:#000000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.0999999;stroke-dasharray:none;stroke-opacity:1\"          id=\"path2396\"          d=\"M 47.608384,75.188343 L 47.608384,78.188343 L 44.608384,78.188343 M 47.608384,78.188343 A 4.875,4.875 0 1 1 51.639336,78.189378\"          />     </g>      <g id=\"parallel\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M46 70 v8 M50 70 v8 M54 70 v8\" stroke-width=\"2\" />  </g>  <g id=\"sequential\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" d=\"M46,76h10M46,72h10 M46,68h10\"/>  </g>     <g id=\"compensation\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M 62 74 L 66 70 L 66 78 L 62 74 L 62 70 L 58 74 L 62 78 L 62 74\" stroke-width=\"1\" />  </g>   </g> </svg> ",
            "icon": "activity/task.png",
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "activity",
                "task",
                "loopcharacteristics",
                "properties",
                "iospecification"
            ],
            "roles": [
                "all",
                "sequence_start",
                "sequence_end",
                "from_task_event",
                "to_task_event",
                "FromEventbasedGateway",
                "messageflow_start",
                "messageflow_end",
                "fromtoall",
                "ActivitiesMorph"
            ]
        },
        {
            "type": "node",
            "id": "CollapsedSubprocess",
            "title": "Collapsed Subprocess",
            "title_de": "Zugeklappter Unterprozess",
            "groups": ["Activities"],
            "groups_de": ["Aktivitäten"],
            "description": "A subprocess is a decomposable activity. It can be linked to another process diagram.",
            "description_de": "Ein Unterprozess ist eine verfeinerbare Aktivität. Er kann mit einem anderen Prozessdiagramm verlinkt werden.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns=\"http://www.w3.org/2000/svg\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:xlink=\"http://www.w3.org/1999/xlink\"    width=\"100\"    height=\"80\"    version=\"1.0\">   <defs></defs>   <oryx:magnets>    <oryx:magnet oryx:cx=\"1\" oryx:cy=\"20\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"1\" oryx:cy=\"40\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"1\" oryx:cy=\"60\" oryx:anchors=\"left\" />        <oryx:magnet oryx:cx=\"25\" oryx:cy=\"79\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"50\" oryx:cy=\"79\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"75\" oryx:cy=\"79\" oryx:anchors=\"bottom\" />        <oryx:magnet oryx:cx=\"99\" oryx:cy=\"20\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"99\" oryx:cy=\"40\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"99\" oryx:cy=\"60\" oryx:anchors=\"right\" />        <oryx:magnet oryx:cx=\"25\" oryx:cy=\"1\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"50\" oryx:cy=\"1\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"75\" oryx:cy=\"1\" oryx:anchors=\"top\" />        <oryx:magnet oryx:cx=\"50\" oryx:cy=\"40\" oryx:default=\"yes\" />   </oryx:magnets>   <g pointer-events=\"fill\" oryx:minimumSize=\"80 60\">    <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffcc\" stop-opacity=\"1\"/>   </radialGradient>  </defs>    <rect id=\"text_frame\" oryx:anchors=\"bottom top right left\" x=\"1\" y=\"1\" width=\"94\" height=\"79\" rx=\"10\" ry=\"10\" stroke=\"none\" stroke-width=\"0\" fill=\"none\" />  <rect id=\"bg_frame\" oryx:anchors=\"bottom top right left\" x=\"0\" y=\"0\" width=\"100\" height=\"80\" rx=\"10\" ry=\"10\" stroke=\"black\" stroke-width=\"1\" fill=\"url(#background) #ffffcc\" />     <rect id=\"callActivity\" oryx:resize=\"vertical horizontal\" oryx:anchors=\"bottom top right left\" x=\"0\" y=\"0\" width=\"100\" height=\"80\" rx=\"10\" ry=\"10\" stroke=\"black\" stroke-width=\"4\" fill=\"none\" />  <rect id=\"border\" oryx:anchors=\"top bottom left right\" oryx:resize=\"vertical horizontal\" x=\"2.5\" y=\"2.5\" width=\"95\" height=\"75\" rx=\"8\" ry=\"8\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />      <text     font-size=\"12\"    id=\"text_name\"     x=\"50\"     y=\"40\"     oryx:align=\"middle center\"    oryx:fittoelem=\"text_frame\"    stroke=\"black\">   </text>         <a id=\"u\" target=\"_blank\">    <g id=\"b\"     oryx:anchors=\"bottom\">         <rect oryx:anchors=\"bottom\" x=\"44\" y=\"66\" width=\"14\" height=\"14\" fill=\"none\" stroke=\"black\" stroke-width=\"1\" />    <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M51 68 v10 M 46 73 h10\" stroke-width=\"1\"/>      </g>  </a>  <g id=\"none\"></g>  <g id=\"loop\">   <path           oryx:anchors=\"bottom\"          style=\"opacity:1;fill:none;fill-opacity:1;stroke:#000000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.0999999;stroke-dasharray:none;stroke-opacity:1\"           id=\"path2396\"           d=\"M 50.5,72 L 50.5,75 L 47.5,75 M 50.5,75 A 4.875,4.875 0 1 1 54.5,75\"    transform=\"translate(-15.5,0)\"           />  </g>     <g id=\"parallel\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M47 65 v10 M51 65 v10 M55 65 v10\" stroke-width=\"2\" transform=\"translate(-15 0)\" />  </g>  <g id=\"sequential\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" d=\"M42,66H32 M42,70H32 M42,74H32\"/>  </g>      <g id=\"adhoc\">   <text     oryx:anchors=\"bottom\"    x=\"61\"    y=\"77\"    font-size=\"20\"    transform=\"translate(14,0)\"   >~</text>  </g>  <g id=\"compensation\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M 51 70 L 56 65 L 56 75z M45.7 70 L50.7 75 L 50.7 65z\" stroke-width=\"1\"   transform=\"translate(-28,0)\" />  </g>   </g> </svg> ",
            "icon": "activity/subprocess.png",
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "activity",
                "subprocess",
                "loopcharacteristics",
                "bgColor",
                "properties",
                "iospecification"
            ],
            "properties": [
                {
                    "id": "activitytype",
                    "type": "String",
                    "title": "ActivityType",
                    "title_de": "Aktivitätstyp",
                    "value": "Sub-Process",
                    "value_de": "Unterprozess",
                    "description": "The Type of Activity.",
                    "description_de": "Typ der Aktivität",
                    "readonly": true,
                    "optional": false,
                    "length": ""
                },
                {
                    "id": "bgcolor",
                    "type": "Color",
                    "title": "BackgroundColor",
                    "title_de": "Hintergrundfarbe",
                    "value": "#ffffcc",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "fill_el",
                    "fill": true,
                    "stroke": false
                }
            ],
            "roles": [
                "all",
                "sequence_start",
                "sequence_end",
                "messageflow_start",
                "messageflow_end",
                "to_task_event",
                "from_task_event",
                "fromtoall",
                "ActivitiesMorph"
            ]
        },
        {
            "type": "node",
            "id": "Subprocess",
            "title": "Expanded Subprocess",
            "title_de": "Aufgeklappter Unterprozess",
            "groups": ["Activities"],
            "groups_de": ["Aktivitäten"],
            "description": "A subprocess is a decomposable activity. An expanded subprocess contains a valid BPMN diagram.",
            "description_de": "Ein Unterprozess ist eine verfeinerte Aktivität. Ein aufgeklappter Unterprozess enthält in sich ein eigenes BPMN Diagramm, welches direkt innerhalb modelliert wird.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns=\"http://www.w3.org/2000/svg\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:xlink=\"http://www.w3.org/1999/xlink\"    width=\"200\"    height=\"160\"    version=\"1.0\">   <defs></defs>   <oryx:magnets>    <oryx:magnet oryx:cx=\"1\" oryx:cy=\"50\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"1\" oryx:cy=\"80\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"1\" oryx:cy=\"110\" oryx:anchors=\"left\" />        <oryx:magnet oryx:cx=\"70\" oryx:cy=\"159\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"100\" oryx:cy=\"159\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"130\" oryx:cy=\"159\" oryx:anchors=\"bottom\" />        <oryx:magnet oryx:cx=\"199\" oryx:cy=\"50\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"199\" oryx:cy=\"80\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"199\" oryx:cy=\"110\" oryx:anchors=\"right\" />        <oryx:magnet oryx:cx=\"70\" oryx:cy=\"1\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"100\" oryx:cy=\"1\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"130\" oryx:cy=\"1\" oryx:anchors=\"top\" />        <oryx:magnet oryx:cx=\"100\" oryx:cy=\"80\" oryx:default=\"yes\" />   </oryx:magnets>   <g pointer-events=\"fill\" oryx:minimumSize=\"120 100\" oryx:maximumSize=\"\" >    <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>       <rect id=\"text_frame\" oryx:anchors=\"bottom top right left\" x=\"0\" y=\"0\" width=\"190\" height=\"160\" rx=\"10\" ry=\"10\" stroke=\"none\" stroke-width=\"0\" fill=\"none\" />  <rect id=\"bg_frame\" oryx:anchors=\"bottom top right left\" x=\"0\" y=\"0\" width=\"200\" height=\"160\" rx=\"10\" ry=\"10\" stroke=\"black\" stroke-width=\"1\" fill=\"url(#background) white\" />  <rect id=\"callActivity\" oryx:anchors=\"bottom top right left\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"200\" height=\"160\" rx=\"10\" ry=\"10\" stroke=\"black\" stroke-width=\"4\" fill=\"none\" />     <rect id=\"border\" oryx:anchors=\"top bottom left right\" oryx:resize=\"vertical horizontal\" x=\"2.5\" y=\"2.5\" width=\"195\" height=\"155\" rx=\"8\" ry=\"8\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />      <text     font-size=\"12\"     id=\"text_name\"     x=\"8\"     y=\"10\"     oryx:align=\"top left\"    oryx:fittoelem=\"text_frame\"    oryx:anchors=\"left top\"     stroke=\"black\"></text>        <g id=\"none\"></g>  <g id=\"loop\">   <path           oryx:anchors=\"bottom\"          style=\"opacity:1;fill:none;fill-opacity:1;stroke:#000000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.0999999;stroke-dasharray:none;stroke-opacity:1\"           id=\"path2396\"           d=\"M 100.5,152 L 100.5,155 L 97.5,155 M 100.5,155 A 4.875,4.875 0 1 1 104.5,155\"    />  </g>      <g id=\"parallel\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M97 145 v10 M101 145 v10 M105 145 v10\" stroke-width=\"2\" />  </g>  <g id=\"sequential\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" d=\"M96,154h10 M96,150h10 M96,146h10\"/>  </g>      <g id=\"adhoc\">   <text     oryx:anchors=\"bottom\"    x=\"101\"    y=\"157\"    font-size=\"20\"    transform=\"translate(8,0)\"   >~</text>  </g>  <g id=\"compensation\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M 101 150 L 106 145 L 106 155z M95.7 150 L 100.7 155 L 100.7 145z\" stroke-width=\"1\"   transform=\"translate(-16,0)\" />  </g>   </g> </svg> ",
            "icon": "activity/expanded.subprocess.png",
            "layout": [
                {"type": "layout.bpmn2_0.subprocess"},
                {"type": "layout.container.dockers"},
                {
                    "type": "layout.container.minBounds",
                    "options": {
                        "fixedX": true,
                        "ignoreChildsWithId": [
                            "http://b3mn.org/stencilset/bpmn2.0#Lane",
                            "http://b3mn.org/stencilset/bpmn2.0#StartNoneEvent"
                        ]
                    }
                }
            ],
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "activity",
                "subprocess",
                "loopcharacteristics",
                "properties",
                "iospecification"
            ],
            "properties": [
                {
                    "id": "activitytype",
                    "type": "String",
                    "title": "ActivityType",
                    "title_de": "Aktivitätstyp",
                    "value": "Sub-Process",
                    "value_de": "Unterprozess",
                    "description": "The Type of Activity.",
                    "description_de": "Typ der Aktivität",
                    "readonly": true,
                    "optional": false,
                    "length": ""
                },
                {
                    "id": "bgcolor",
                    "type": "Color",
                    "title": "BackgroundColor",
                    "title_de": "Hintergrundfarbe",
                    "value": "#ffffff",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "fill_el",
                    "fill": true,
                    "stroke": false
                }
            ],
            "roles": [
                "all",
                "sequence_start",
                "sequence_end",
                "messageflow_start",
                "messageflow_end",
                "to_task_event",
                "from_task_event",
                "fromtoall",
                "canContainArtifacts",
                "ActivitiesMorph"
            ]
        },
        {
            "type": "node",
            "id": "CollapsedEventSubprocess",
            "title": "Collapsed Event-Subprocess",
            "title_de": "Zugeklappter Ereignis-Unterprozess",
            "groups": ["Activities"],
            "groups_de": ["Aktivitäten"],
            "description": "An Event-Subprocess is placed within another subprocess. It becomes active when its start event gets triggered and can interrupt the Subprocess context or run in parallel (non-interrupting). It can be linked to another diagram.",
            "description_de": "Ein Ereignis-Unterprozess wird innnerhalb eines anderen Unterprozesses platziert. Er wird dann aktiv, wenn sein Startereignis ausgelöst wird und kann den Unterprozesskontext unterbrechen oder parallel laufen (nicht-unterbrechend). Dieser Unterprozess kann mit einem anderen Diagramm verknüpft werden.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns=\"http://www.w3.org/2000/svg\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:xlink=\"http://www.w3.org/1999/xlink\"    width=\"100\"    height=\"80\"    version=\"1.0\">   <defs></defs>   <oryx:magnets>    <oryx:magnet oryx:cx=\"0\" oryx:cy=\"40\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"50\" oryx:cy=\"80\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"100\" oryx:cy=\"40\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"50\" oryx:cy=\"0\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"50\" oryx:cy=\"40\" oryx:default=\"yes\" />   </oryx:magnets>   <g pointer-events=\"fill\" oryx:minimumSize=\"80 60\">     <defs>    <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">     <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>     <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffcc\" stop-opacity=\"1\"/>    </radialGradient>   </defs>      <rect id=\"text_frame\" oryx:anchors=\"bottom top right left\" x=\"1\" y=\"1\" width=\"94\" height=\"79\" rx=\"10\" ry=\"10\" stroke=\"none\" stroke-width=\"0\" fill=\"none\" />      <rect id=\"bg_frame\" oryx:anchors=\"bottom top right left\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"100\" height=\"80\" rx=\"10\" ry=\"10\" stroke=\"black\" stroke-width=\"1\" stroke-dasharray=\"2,2,2\" fill=\"url(#background) white\" />      <text     font-size=\"12\"    id=\"text_name\"     x=\"50\"     y=\"40\"     oryx:align=\"middle center\"    oryx:fittoelem=\"text_frame\"    stroke=\"black\">   </text>       <g transform=\"scale(0.8,0.8) translate(5,5)\">     <!-- general border for all event-symbols -->   <g>    <circle id=\"frame\" oryx:anchors=\"top left\" cx=\"16\" cy=\"16\" r=\"15\" stroke=\"black\" fill=\"none\" stroke-width=\"1\"/>        <circle      oryx:anchors=\"top left\"        cx=\"16\"         cy=\"16\"         r=\"15\"         stroke=\"black\"         fill=\"none\"         stroke-width=\"1\"        style=\"stroke-dasharray: 5.5, 3\" />   </g>      <!-- message start-event -->   <g id=\"message\">           <path oryx:anchors=\"top left\" stroke=\"black\" fill=\"none\" stroke-width=\"1\" d=\"M8,11 L8,21 L24,21 L24,11z M8,11 L16,17 L24,11\" />   </g>       <!-- timer start-event -->   <g id=\"timer\">       <path oryx:anchors=\"top left\" d=\" M 16 6 L 16 9         M 21 7 L 19.5 10         M 25 11 L 22 12.5         M 26 16 L 23 16         M 25 21 L 22 19.5         M 21 25 L 19.5 22         M 16 26 L 16 23         M 11 25 L 12.5 22         M 7 21 L 10 19.5         M 6 16 L 9 16         M 7 11 L 10 12.5         M 11 7 L 12.5 10         M 18 9 L 16 16 L 20 16\" fill=\"none\" stroke=\"black\" />   </g>       <!-- escalation start-event -->   <g id=\"escalation\">    <path       oryx:anchors=\"top left\"          d=\"M 16,8.75 L22,23.75 L16,17 L10,23.75z \"          id=\"path9\"          style=\"fill:none;stroke:#000000;stroke-width:1\" />   </g>       <!-- conditional start-event -->   <g id=\"conditional\">    <rect oryx:anchors=\"top left\" x=\"8\" y=\"8\" width=\"16\" height=\"16\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />       <path oryx:anchors=\"top left\" d=\" M 10 10 L 22 10         M 10 14 L 22 14         M 10 18 L 22 18         M 10 22 L 22 22\" fill=\"none\" stroke=\"black\" />   </g>      <!-- error start-event -->   <g id=\"error\">       <circle oryx:anchors=\"top left\" cx=\"16\" cy=\"16\" r=\"15\" stroke=\"black\" fill=\"none\" stroke-width=\"1\"/>       <path     oryx:anchors=\"top left\"            style=\"fill:none;stroke:#000000;stroke-width:1.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10\"            d=\"M 22.820839,11.171502 L 19.36734,24.58992 L 13.54138,14.281819 L 9.3386512,20.071607 L 13.048949,6.8323057 L 18.996148,16.132659 L 22.820839,11.171502 z\"            id=\"errorPolygon\" />   </g>       <!-- compensation start-event -->   <g id=\"compensationStart\">    <circle oryx:anchors=\"top left\" cx=\"16\" cy=\"16\" r=\"15\" stroke=\"black\" fill=\"none\" stroke-width=\"1\"/>       <polygon oryx:anchors=\"top left\" stroke=\"black\" fill=\"none\" stroke-width=\"1.4\" points=\"15,9 15,23 8,16\" stroke-linecap=\"butt\" stroke-linejoin=\"miter\" stroke-miterlimit=\"10\" />       <polygon oryx:anchors=\"top left\" stroke=\"black\" fill=\"none\" stroke-width=\"1.4\" points=\"22,9 22,23 15,16\" stroke-linecap=\"butt\" stroke-linejoin=\"miter\" stroke-miterlimit=\"10\" />   </g>      <!-- signal start-event -->   <g id=\"signal\">    <path     oryx:anchors=\"top left\"          d=\"M 8.7124971,21.247342 L 23.333334,21.247342 L 16.022915,8.5759512 L 8.7124971,21.247342 z\"          id=\"triangle\"          style=\"fill:none;stroke:#000000;stroke-width:1.4;stroke-miterlimit:4;stroke-dasharray:none\" />   </g>      <!-- multiple start-event -->   <g id=\"multiple\">    <path      oryx:anchors=\"top left\"     style=\"fill:none;     fill-opacity:1;     stroke:#000000;     stroke-width:1.4;     stroke-linejoin:bevel;     stroke-opacity:1\"           d=\"M 20.834856,22.874369 L 10.762008,22.873529 L 7.650126,13.293421 L 15.799725,7.3734296 L 23.948336,13.294781 L 20.834856,22.874369 z\"          id=\"middlepolygon\" />   </g>      <!-- multiple (parallel) start-event -->   <g id=\"multipleParallel\">    <path     oryx:anchors=\"top left\"     d=\"M 6.75,13 L6.75,19 L13,19 L13,25.75 L19,25.75 L19,19 L25.75,19 L25.75,13 L19,13 L19,6.75 L13,6.75 L13,13z\"     id=\"path9\"     style=\"fill:none;stroke:#000000;stroke-width:1\" />   </g>    </g>      <a id=\"u\" target=\"_blank\">    <g id=\"b\"     oryx:anchors=\"bottom\">         <rect oryx:anchors=\"bottom\" x=\"44\" y=\"66\" width=\"14\" height=\"14\" fill=\"none\" stroke=\"black\" stroke-width=\"1\" />    <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M51 68 v10 M 46 73 h10\" stroke-width=\"1\"/>      </g>  </a>  <g id=\"none\"></g>  <g id=\"loop\">   <path           oryx:anchors=\"bottom\"          style=\"opacity:1;fill:none;fill-opacity:1;stroke:#000000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.0999999;stroke-dasharray:none;stroke-opacity:1\"           id=\"path2396\"           d=\"M 50.5,72 L 50.5,75 L 47.5,75 M 50.5,75 A 4.875,4.875 0 1 1 54.5,75\"    transform=\"translate(-14.5,0)\"           />  </g>    <g id=\"parallel\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M47 65 v10 M51 65 v10 M55 65 v10\" stroke-width=\"2\" transform=\"translate(-14 0)\" />  </g>      <g id=\"adhoc\">   <text     oryx:anchors=\"bottom\"    x=\"61\"    y=\"77\"    font-size=\"20\"    transform=\"translate(14,0)\"   >~</text>  </g>  <g id=\"compensation\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M 51 70 L 56 65 L 56 75z M45.7 70 L50.7 75 L 50.7 65z\" stroke-width=\"1\"   transform=\"translate(-28,0)\" />  </g>   </g> </svg> ",
            "icon": "activity/event.subprocess.collapsed.png",
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "activity",
                "subprocess",
                "interrupting",
                "loopcharacteristics",
                "properties",
                "iospecification"
            ],
            "properties": [
                {
                    "id": "activitytype",
                    "type": "String",
                    "title": "ActivityType",
                    "title_de": "Aktivitätstyp",
                    "value": "Event-Sub-Process",
                    "value_de": "Ereignis-Unterprozess",
                    "description": "The Type of Activity.",
                    "description_de": "Typ der Aktivität",
                    "readonly": true,
                    "optional": false,
                    "length": ""
                },
                {
                    "id": "startevent",
                    "type": "Choice",
                    "title": "Start-Event",
                    "title_de": "Start-Ereignis",
                    "value": "Message",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "items": [
                        {
                            "id": "c1",
                            "title": "Message",
                            "title_de": "Nachricht",
                            "value": "Message",
                            "icon": "activity/list/event.message.png",
                            "refToView": "message"
                        },
                        {
                            "id": "c2",
                            "title": "Timer",
                            "title_de": "Timer",
                            "value": "Timer",
                            "icon": "activity/list/event.timer.png",
                            "refToView": "timer"
                        },
                        {
                            "id": "c3",
                            "title": "Escalation",
                            "title_de": "Eskalation",
                            "value": "Escalation",
                            "icon": "activity/list/event.escalation.png",
                            "refToView": "escalation"
                        },
                        {
                            "id": "c4",
                            "title": "Conditional",
                            "title_de": "Bedingung",
                            "value": "Conditional",
                            "icon": "activity/list/event.conditional.png",
                            "refToView": "conditional"
                        },
                        {
                            "id": "c5",
                            "title": "Error",
                            "title_de": "Fehler",
                            "value": "Error",
                            "icon": "activity/list/event.error.png",
                            "refToView": "error"
                        },
                        {
                            "id": "c6",
                            "title": "Compensation",
                            "title_de": "Kompensation",
                            "value": "Compensation",
                            "icon": "activity/list/event.compensation.png",
                            "refToView": "compensationStart"
                        },
                        {
                            "id": "c7",
                            "title": "Signal",
                            "title_de": "Signal",
                            "value": "Signal",
                            "icon": "activity/list/event.signal.png",
                            "refToView": "signal"
                        },
                        {
                            "id": "c8",
                            "title": "Multiple",
                            "title_de": "Mehrere",
                            "value": "Multiple",
                            "icon": "activity/list/event.multiple.png",
                            "refToView": "multiple"
                        },
                        {
                            "id": "c9",
                            "title": "Multiple (Parallel)",
                            "title_de": "Mehrere (Parallel)",
                            "value": "MultipleParallel",
                            "icon": "activity/list/event.multiple.parallel.png",
                            "refToView": "multipleParallel"
                        }
                    ]
                },
                {
                    "id": "bgcolor",
                    "type": "Color",
                    "title": "BackgroundColor",
                    "title_de": "Hintergrundfarbe",
                    "value": "#ffffff",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "fill_el",
                    "fill": true,
                    "stroke": false
                }
            ],
            "roles": [
                "all",
                "fromtoall",
                "canContainArtifacts",
                "EventActivitiesMorph"
            ]
        },
        {
            "type": "node",
            "id": "EventSubprocess",
            "title": "Event-Subprocess",
            "title_de": "Ereignis-Unterprozess",
            "groups": ["Activities"],
            "groups_de": ["Aktivitäten"],
            "description": "An Event-Subprocess is placed within another Subprocess. It becomes active when its start event gets triggered and can interrupt the Subprocess context or run in parallel (non-interrupting).",
            "description_de": "Ein Ereignis-Unterprozess wird innerhalb eines anderen Unterprozesses platziert. Er wird aktiv, wenn sein Startereignis ausgelöst wird und kann den Unterprozesskontext unterbrechen oder parallel laufen (nicht-unterbrechend).",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns=\"http://www.w3.org/2000/svg\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:xlink=\"http://www.w3.org/1999/xlink\"    width=\"200\"    height=\"160\"    version=\"1.0\">   <defs></defs>   <oryx:magnets>    <oryx:magnet oryx:cx=\"0\" oryx:cy=\"80\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"100\" oryx:cy=\"160\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"200\" oryx:cy=\"80\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"100\" oryx:cy=\"0\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"100\" oryx:cy=\"80\" oryx:default=\"yes\" />   </oryx:magnets>   <g pointer-events=\"fill\" oryx:minimumSize=\"120 100\" oryx:maximumSize=\"\" >    <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>    <rect id=\"text_frame\" oryx:anchors=\"bottom top right left\" x=\"0\" y=\"0\" width=\"190\" height=\"160\" rx=\"10\" ry=\"10\" stroke=\"none\" stroke-width=\"0\" fill=\"none\" />  <rect id=\"bg_frame\" oryx:anchors=\"bottom top right left\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"200\" height=\"160\" rx=\"10\" ry=\"10\" stroke=\"black\" stroke-width=\"1\" stroke-dasharray=\"2,2,2\" fill=\"url(#background) white\" />      <text     font-size=\"12\"     id=\"text_name\"     x=\"8\"     y=\"10\"     oryx:align=\"top left\"    oryx:fittoelem=\"text_frame\"    oryx:anchors=\"left top\"     stroke=\"black\"></text>        <g id=\"none\"></g>  <g id=\"loop\">   <path           oryx:anchors=\"bottom\"          style=\"opacity:1;fill:none;fill-opacity:1;stroke:#000000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.0999999;stroke-dasharray:none;stroke-opacity:1\"           id=\"path2396\"           d=\"M 100.5,152 L 100.5,155 L 97.5,155 M 100.5,155 A 4.875,4.875 0 1 1 104.5,155\"    />  </g>      <g id=\"parallel\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M97 145 v10 M101 145 v10 M105 145 v10\" stroke-width=\"2\" />  </g>  <g id=\"sequential\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" d=\"M96,154h10 M96,150h10 M96,146h10\"/>  </g>      <g id=\"adhoc\">   <text     oryx:anchors=\"bottom\"    x=\"101\"    y=\"157\"    font-size=\"20\"    transform=\"translate(8,0)\"   >~</text>  </g>  <g id=\"compensation\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M 101 150 L 106 145 L 106 155z M95.7 150 L 100.7 155 L 100.7 145z\" stroke-width=\"1\"   transform=\"translate(-16,0)\" />  </g>   </g> </svg> ",
            "icon": "activity/event.subprocess.png",
            "layout": [{"type": "layout.bpmn2_0.subprocess"}],
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "activity",
                "subprocess",
                "loopcharacteristics",
                "properties",
                "iospecification"
            ],
            "properties": [
                {
                    "id": "activitytype",
                    "type": "String",
                    "title": "ActivityType",
                    "title_de": "Aktivitätstyp",
                    "value": "Event-Sub-Process",
                    "value_de": "Ereignis-Unterprozess",
                    "description": "The Type of Activity.",
                    "description_de": "Typ der Aktivität",
                    "readonly": true,
                    "optional": false,
                    "length": ""
                },
                {
                    "id": "bgcolor",
                    "type": "Color",
                    "title": "BackgroundColor",
                    "title_de": "Hintergrundfarbe",
                    "value": "#ffffff",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "fill_el",
                    "fill": true,
                    "stroke": false
                },
                {
                    "id": "isatransaction",
                    "type": "Boolean",
                    "title": "is a Transaction",
                    "title_de": "ist eine Transaktion",
                    "value": false,
                    "description": "A Transaction is a set of activities that logically belongs together; it might follow a specified transaction protocol.",
                    "readonly": true,
                    "optional": false
                },
                {
                    "id": "callacitivity",
                    "type": "Boolean",
                    "title": "is a Call Activity",
                    "title_de": "ist eine Call Activity",
                    "value": false,
                    "description": "a Call Activity is a wrapper for a globally defined Sub-Process that is reused in the current process.",
                    "readonly": true,
                    "optional": "true"
                }
            ],
            "roles": [
                "all",
                "fromtoall",
                "canContainArtifacts",
                "EventActivitiesMorph"
            ]
        },
        {
            "type": "node",
            "id": "Exclusive_Databased_Gateway",
            "title": "Data-based Exclusive (XOR) Gateway",
            "title_de": "Daten-basiertes exklusives Gateway",
            "description": "When splitting, it routes the sequence flow to exactly one of the outgoing branches based on conditions. When merging, it awaits one incoming branch to complete before triggering the outgoing flow.",
            "description_de": "Bei einer Verzweigung wird der Sequenzfluss abhängig von Verzweigungsbedingungen zu genau einer ausgehenden Kante geleitet. Bei einer Zusammenführung wird auf eine der eingehenden Kante gewartet, um den ausgehenden Sequenzfluss zu aktivieren.",
            "groups": ["Gateways"],
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns=\"http://www.w3.org/2000/svg\"    version=\"1.0\"    width=\"40\"    height=\"40\">   <defs      id=\"defs4\" />   <oryx:magnets>     <oryx:magnet        oryx:default=\"yes\"        oryx:cy=\"16\"        oryx:cx=\"16\" />   </oryx:magnets>        <g>        <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>       <path        d=\"M -4.5,16 L 16,-4.5 L 35.5,16 L 16,35.5z\"        id=\"bg_frame\"        fill=\"url(#background) white\"        style=\"stroke:#000000;stroke-width:1\" />     <g        id=\"cross\">       <path          d=\"M 8.75,7.55 L 12.75,7.55 L 23.15,24.45 L 19.25,24.45 z\"          style=\"fill:#000000;stroke:#000000;stroke-width:1\" />       <path          d=\"M 8.75,24.45 L 19.25,7.55 L 23.15,7.55 L 12.75,24.45 z\"          style=\"fill:#000000;stroke:#000000;stroke-width:1\" />     </g>    <text id=\"text_name\" x=\"26\" y=\"26\" oryx:align=\"left top\"/>     </g> </svg> ",
            "icon": "gateway/exclusive.databased.png",
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "gateway",
                "bgColor"
            ],
            "properties": [
                {
                    "id": "gatewaytype",
                    "type": "String",
                    "title": "Gateway type",
                    "title": "Gateway-Typ",
                    "value": "XOR",
                    "description": "",
                    "readonly": true,
                    "optional": false,
                    "length": ""
                },
                {
                    "id": "xortype",
                    "type": "String",
                    "title": "XOR type",
                    "title_de": "XOR-Typ",
                    "value": "Data",
                    "description": "",
                    "readonly": true,
                    "optional": false,
                    "length": ""
                },
                {
                    "id": "markervisible",
                    "type": "Boolean",
                    "title": "X-Marker visible",
                    "title_de": "X-Marker sichtbar",
                    "value": "true",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "cross"
                },
                {
                    "id": "defaultgate",
                    "type": "String",
                    "title": "Default gate",
                    "title_de": "Standardgate",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50",
                    "wrapLines": true
                },
                {
                    "id": "gate_outgoingsequenceflow",
                    "type": "String",
                    "title": "[Gate] OutgoingSequenceFlow",
                    "title_de": "[Gate] Ausgehender Steuerfluss",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50"
                },
                {
                    "id": "gate_assignments",
                    "type": "String",
                    "title": "[Gate] Assignments",
                    "title_de": "[Gates] Zuweisungen",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50",
                    "wrapLines": true
                }
            ],
            "roles": [
                "all",
                "sequence_start",
                "sequence_end",
                "choreography_sequence_start",
                "choreography_sequence_end",
                "fromtoall",
                "GatewaysMorph"
            ]
        },
        {
            "type": "node",
            "id": "EventbasedGateway",
            "title": "Event-based Gateway",
            "title_de": "Ereignis-basiertes Gateway",
            "groups": ["Gateways"],
            "description": "Is always followed by catching events or receive tasks. Sequence flow is routed to the subsequent event/task which happens first.",
            "description_de": "Wenn der Sequenzfluss verzweigt wird, werden alle ausgehenden Kanten simultan aktiviert. Bei der Zusammenführung wird auf alle eingehenden Kanten gewartet, bevor der ausgehende Sequenzfluss aktiviert wird.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns=\"http://www.w3.org/2000/svg\"    version=\"1.0\"    width=\"40\"    height=\"40\">   <oryx:magnets>     <oryx:magnet        oryx:default=\"yes\"        oryx:cy=\"16\"        oryx:cx=\"16\" />   </oryx:magnets>      <g>          <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>    <path   d=\"M -4.5,16 L 16,-4.5 L 35.5,16 L 16,35.5z\"   id=\"bg_frame\"   fill=\"url(#background) white\"   style=\"stroke:#000000;stroke-width:1\" />  <circle   cx=\"16\"   cy=\"16\"   r=\"10.4\"   style=\"fill:none;stroke:#000000;stroke-width:0.5\" />  <circle   cx=\"16\"   cy=\"16\"   r=\"11.7\"   style=\"fill:none;stroke:#000000;stroke-width:0.5\" />  <path   d=\"M 20.327514,22.344972 L 11.259248,22.344216 L 8.4577203,13.719549 L 15.794545,8.389969 L 23.130481,13.720774 L 20.327514,22.344972 z\"   id=\"middlePolygon\"   style=\"fill:none;fill-opacity:1;stroke:#000000;stroke-width:1.39999998;stroke-linejoin:bevel;stroke-opacity:1\" />      <g id=\"instantiate\">     <path    d=\"M -4.5,16 L 16,-4.5 L 35.5,16 L 16,35.5z\"    id=\"bg_frame\"    fill=\"url(#background) white\"    style=\"stroke:#000000;stroke-width:1\" />   <circle    cx=\"16\"    cy=\"16\"    r=\"11\"    style=\"fill:none;stroke:#000000;stroke-width:1\" />   <path    d=\"M 20.327514,22.344972 L 11.259248,22.344216 L 8.4577203,13.719549 L 15.794545,8.389969 L 23.130481,13.720774 L 20.327514,22.344972 z\"    id=\"middlePolygon\"    style=\"fill:none;fill-opacity:1;stroke:#000000;stroke-width:1.39999998;stroke-linejoin:bevel;stroke-opacity:1\" />       <g id=\"parallel\">    <path     d=\"M -4.5,16 L 16,-4.5 L 35.5,16 L 16,35.5z\"     id=\"bg_frame\"     fill=\"url(#background) white\"     style=\"stroke:#000000;stroke-width:1\" />    <circle id=\"frame5\" cx=\"16\" cy=\"16\" r=\"12\" stroke=\"black\" fill=\"none\" stroke-width=\"1\"/>        <path     d=\"M 6.75,14 L6.75,18 L14,18 L14,24.75 L18,24.75 L18,18 L24.75,18 L24.75,14 L18,14 L18,6.75 L14,6.75 L14,14z\"     id=\"path9\"     style=\"fill:none;stroke:#000000;stroke-width:1\" />      </g>    </g>    <text id=\"text_name\" x=\"26\" y=\"26\" oryx:align=\"left top\"/>     </g>    </svg> ",
            "icon": "gateway/eventbased.png",
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "gateway",
                "bgColor"
            ],
            "properties": [
                {
                    "id": "eventtype",
                    "type": "Choice",
                    "title": "Type",
                    "title_de": "Typ",
                    "value": "exclusive",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "items": [
                        {
                            "id": "c1",
                            "title": "Exclusive (standard)",
                            "title_de": "Exklusiv (Standard)",
                            "value": "exclusive",
                            "icon": "gateway/list/eventbased.exclusive.png",
                            "refToView": "default"
                        },
                        {
                            "id": "c2",
                            "title": "Exclusive Instantiation",
                            "title_de": "Exklusive Instantiierung",
                            "value": "instantiate_exclusive",
                            "icon": "gateway/list/eventbased.exclusive.png",
                            "refToView": ["default", "instantiate"]
                        },
                        {
                            "id": "c3",
                            "title": "Parallel Instantiation",
                            "title_de": "Parallele Instantiierung",
                            "value": "instantiate_parallel",
                            "icon": "gateway/list/eventbased.parallel.png",
                            "refToView": ["parallel", "instantiate"]
                        }
                    ]
                }
            ],
            "roles": [
                "all",
                "sequence_end",
                "choreography_sequence_start",
                "choreography_sequence_end",
                "fromtoall",
                "GatewaysMorph",
                "EventbasedGateway"
            ]
        },
        {
            "type": "node",
            "id": "ParallelGateway",
            "title": "Parallel Gateway",
            "title_de": "Paralleles Gateway",
            "groups": ["Gateways"],
            "description": "When used to split the sequence flow, all outgoing branches are activated simultaneously. When merging parallel branches it waits for all incoming branches to complete before triggering the outgoing flow.",
            "description_de": "Wenn der Sequenzfluss verzweigt wird, werden alle ausgehenden Kanten simultan aktiviert. Bei der Zusammenführung wird auf alle eingehenden Kanten gewartet, bevor der ausgehende Sequenzfluss aktiviert wird.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns=\"http://www.w3.org/2000/svg\"    version=\"1.0\"    width=\"40\"    height=\"40\">       <oryx:magnets>     <oryx:magnet        oryx:default=\"yes\"        oryx:cy=\"16\"        oryx:cx=\"16\" />   </oryx:magnets>   <g>      <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>       <path        d=\"M -4.5,16 L 16,-4.5 L 35.5,16 L 16,35.5z\"        id=\"bg_frame\"        fill=\"url(#background) white\"        style=\"stroke:#000000;stroke-width:1\" />     <path        d=\"M 6.75,16 L 25.75,16 M 16,6.75 L 16,25.75\"        id=\"path9\"        style=\"fill:none;stroke:#000000;stroke-width:3\" />       <text id=\"text_name\" x=\"26\" y=\"26\" oryx:align=\"left top\"/>     </g> </svg> ",
            "icon": "gateway/parallel.png",
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "gateway",
                "bgColor"
            ],
            "properties": [
                {
                    "id": "gatewaytype",
                    "type": "String",
                    "title": "GatewayType",
                    "title_de": "Gatewaytyp",
                    "value": "AND",
                    "description": "",
                    "readonly": true,
                    "optional": false,
                    "length": ""
                }
            ],
            "roles": [
                "all",
                "sequence_start",
                "sequence_end",
                "choreography_sequence_start",
                "choreography_sequence_end",
                "fromtoall",
                "GatewaysMorph"
            ]
        },
        {
            "type": "node",
            "id": "InclusiveGateway",
            "title": "Inclusive Gateway",
            "title_de": "Inklusives Gateway",
            "groups": ["Gateways"],
            "description": "When splitting, one or more branches are activated based on branching conditions. When merging, it awaits all active incoming branches to complete.",
            "description_de": "Bei einer Verzweigung werden eine oder mehrere Kanten abhängig von Verzweigungsbedingungen aktiviert. Bei einer Vereinigung wird auf alle eingehenden aktiven Kanten gewartet.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns=\"http://www.w3.org/2000/svg\"    version=\"1.0\"    width=\"40\"    height=\"40\">   <oryx:magnets>     <oryx:magnet        oryx:default=\"yes\"        oryx:cy=\"16\"        oryx:cx=\"16\" />   </oryx:magnets>   <g>      <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>       <path        d=\"M -4.5,16 L 16,-4.5 L 35.5,16 L 16,35.5z\"        id=\"bg_frame\"        fill=\"url(#background) white\"        style=\"stroke:#000000;stroke-width:1\" />     <circle        cx=\"16\"        cy=\"16\"        r=\"9.75\"        style=\"fill:none;stroke:#000000;stroke-width:2.5\" />       <text id=\"text_name\" x=\"26\" y=\"26\" oryx:align=\"left top\"/>     </g> </svg> ",
            "icon": "gateway/inclusive.png",
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "gateway",
                "bgColor"
            ],
            "properties": [
                {
                    "id": "gatewaytype",
                    "type": "String",
                    "title": "GatewayType",
                    "title_de": "Gatewaytyp",
                    "value": "OR",
                    "description": "",
                    "readonly": true,
                    "optional": false,
                    "length": ""
                },
                {
                    "id": "defaultgate",
                    "type": "String",
                    "title": "DefaultGate",
                    "title_de": "Standardgate",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50",
                    "wrapLines": true
                },
                {
                    "id": "gate_outgoingsequenceflow",
                    "type": "String",
                    "title": "[Gate] OutgoingSequenceFlow",
                    "title_de": "[Gate] Ausgehender Steuerfluss",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50"
                },
                {
                    "id": "gate_assignments",
                    "type": "String",
                    "title": "[Gate] Assignments",
                    "title": "[Gates] Zuweisungen",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50",
                    "wrapLines": true
                }
            ],
            "roles": [
                "all",
                "sequence_start",
                "sequence_end",
                "choreography_sequence_start",
                "choreography_sequence_end",
                "fromtoall",
                "GatewaysMorph"
            ]
        },
        {
            "type": "node",
            "id": "ComplexGateway",
            "title": "Complex Gateway",
            "title_de": "Komplexes Gateway",
            "groups": ["Gateways"],
            "description": "It triggers one or more branches based on complex conditions or verbal descriptions. Use it sparingly as the semantics might not be clear.",
            "description_de": "Eine oder mehrere Kanten werden abhängig von komplexen Bedingungen oder verbalen Beschreibungen aktiviert. Es sollte nur benutzt werden, wenn sich das Verhalten nicht durch andere Gateways ausdrücken lässt.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns=\"http://www.w3.org/2000/svg\"    version=\"1.0\"    width=\"40\"    height=\"40\">   <oryx:magnets>     <oryx:magnet        oryx:default=\"yes\"        oryx:cy=\"16\"        oryx:cx=\"16\" />   </oryx:magnets>   <g>      <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>       <path        d=\"M -4.5,16 L 16,-4.5 L 35.5,16 L 16,35.5z\"        id=\"bg_frame\"        fill=\"url(#background) white\"        style=\"stroke:#000000;stroke-width:1\" />     <path        d=\"M 6.25,16 L 25.75,16 M 16,6.25 L 16,25.75 M 8.85,8.85 L 23.15,23.15 M 8.85,23.15 L 23.15,8.85\"        style=\"fill:#ffffff;stroke:#000000;stroke-width:3.9\" />       <text id=\"text_name\" x=\"26\" y=\"26\" oryx:align=\"left top\"/>     </g> </svg> ",
            "icon": "gateway/complex.png",
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "gateway",
                "bgColor"
            ],
            "properties": [
                {
                    "id": "gatewaytype",
                    "type": "String",
                    "title": "GatewayType",
                    "title_de": "Gatewaytyp",
                    "value": "Complex",
                    "description": "",
                    "readonly": true,
                    "optional": false,
                    "length": ""
                },
                {
                    "id": "activationcondition",
                    "type": "String",
                    "title": "ActivationCondition",
                    "title_de": "Aktivierungsbedingung",
                    "value": "",
                    "popular": true,
                    "description": "Determines which combination of incoming tokens will be synchronized for activation of the Gateway.",
                    "readonly": false,
                    "optional": true
                },
                {
                    "id": "incomingcondition",
                    "type": "String",
                    "title": "IncomingCondition",
                    "title_de": "Eingangsbedingung",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50"
                },
                {
                    "id": "outgoingcondition",
                    "type": "String",
                    "title": "OutgoingCondition",
                    "title_de": "Ausgangsbedingung",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "50"
                }
            ],
            "roles": [
                "all",
                "sequence_start",
                "sequence_end",
                "choreography_sequence_start",
                "choreography_sequence_end",
                "fromtoall",
                "GatewaysMorph"
            ]
      },
        {
            "type": "node",
            "id": "Pool",
            "title": "Pool",
            "groups": ["Swimlanes"],
            "groups_de": ["Rollen"],
            "description": "Pools and Lanes represent responsibilities for activities in a process. A pool or a lane can be an organization, a role, or a system.",
            "description_de": "Pools repräsentieren Organisationseinheiten und können durch Lanes weiter aufgefächert bzw. unterstrukturiert werden.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns=\"http://www.w3.org/2000/svg\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:xlink=\"http://www.w3.org/1999/xlink\"    width=\"600\"    height=\"250\"    version=\"1.0\">   <defs></defs>   <oryx:magnets>    <oryx:magnet oryx:cx=\"0\" oryx:cy=\"124\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"299\" oryx:cy=\"249\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"599\" oryx:cy=\"124\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"299\" oryx:cy=\"0\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"299\" oryx:cy=\"124\" oryx:default=\"yes\" />   </oryx:magnets>   <g pointer-events=\"painted\" >      <defs>   <radialGradient id=\"background\" cx=\"0%\" cy=\"10%\" r=\"100%\" fx=\"20%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>         <rect id=\"border\" class=\"stripable-element-force\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"600\" height=\"250\" fill=\"none\" stroke-width=\"9\" stroke=\"white\" visibility=\"hidden\"/>     <rect id=\"c\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"600\" height=\"250\" stroke=\"black\" fill=\"none\" />       <rect    id=\"caption\"   oryx:anchors=\"left top bottom\"   x=\"0\"   y=\"0\"   width=\"30\"   height=\"250\"   stroke=\"black\"   stroke-width=\"1\"   fill=\"white\"  />    <rect    id=\"captionDisableAntialiasing\"   oryx:anchors=\"left top bottom\"   x=\"0\"   y=\"0\"   width=\"30\"   height=\"250\"   stroke=\"black\"   stroke-width=\"1\"   fill=\"url(#background) white\"  />       <text x=\"10\" y=\"125\" font-size=\"14\" id=\"text_name\" oryx:fittoelem=\"caption\" oryx:align=\"middle center\" oryx:anchors=\"left\" oryx:rotate=\"270\" fill=\"black\" stroke=\"black\"></text>    <g id=\"multiInstance\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M296 240 v8 M300 240 v8 M304 240 v8\" stroke-width=\"2\" />  </g>   </g> </svg> ",
            "icon": "swimlane/pool.png",
            "propertyPackages": [
                "baseAttributes",
                "pool",
                "process",
                "bgColor"
            ],
            "roles": [
                "all",
                "messageflow_start",
                "messageflow_end",
                "fromtoall",
                "canContainArtifacts"
            ],
            "layout": [{"type": "layout.bpmn2_0.pool"}]
        },
        {
            "type": "node",
            "id": "CollapsedPool",
            "title": "Collapsed Pool",
            "title_de": "Zugeklappter Pool",
            "groups": ["Swimlanes"],
            "groups_de": ["Rollen"],
            "description": "Collapsed Pools hide all internals of the contained processes.",
            "description_de": "Ein zugeklappter Pool (anonym) kommt zum Einsatz, wenn der innere Ablauf eines Kommunikationspartners keine unmittelbare Rolle spielt.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns=\"http://www.w3.org/2000/svg\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:xlink=\"http://www.w3.org/1999/xlink\"    width=\"600\"    height=\"250\"    version=\"1.0\">   <defs></defs>   <oryx:magnets>    <oryx:magnet oryx:cx=\"0\" oryx:cy=\"29\" oryx:anchors=\"left\" />    <oryx:magnet oryx:cx=\"249\" oryx:cy=\"59\" oryx:anchors=\"bottom\" />    <oryx:magnet oryx:cx=\"499\" oryx:cy=\"29\" oryx:anchors=\"right\" />    <oryx:magnet oryx:cx=\"249\" oryx:cy=\"0\" oryx:anchors=\"top\" />    <oryx:magnet oryx:cx=\"249\" oryx:cy=\"29\" oryx:default=\"yes\" />   </oryx:magnets>   <g pointer-events=\"fill\" >        <defs>   <radialGradient id=\"background\" cx=\"10%\" cy=\"10%\" r=\"100%\" fx=\"10%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>       <rect id=\"c\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"500\" height=\"60\" stroke=\"black\" fill=\"url(#background) white\" />     <rect id=\"border\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"500\" height=\"60\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />       <text    x=\"250\"    y=\"30\"    font-size=\"20\"    id=\"text_name\"    oryx:align=\"middle center\"    oryx:fittoelem=\"border\"   oryx:anchors=\"\"    fill=\"black\"    stroke=\"black\">  </text>    <g id=\"multiInstance\">   <path oryx:anchors=\"bottom\" fill=\"none\" stroke=\"black\" d=\"M246 50 v8 M250 50 v8 M254 50 v8\" stroke-width=\"2\" />  </g>     </g> </svg> ",
            "icon": "swimlane/lane.png",
            "propertyPackages": [
                "baseAttributes",
                "pool",
                "process",
                "bgColor"
            ],
            "properties": [
                {
                    "id": "bgcolor",
                    "type": "Color",
                    "title": "BackgroundColor",
                    "title_de": "Hintergrundfarbe",
                    "value": "#ffffff",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "fill_el",
                    "fill": true,
                    "stroke": false
                }
            ],
            "roles": [
                "all",
                "messageflow_start",
                "messageflow_end",
                "fromtoall"
            ]
        },
        {
            "type": "node",
            "id": "Lane",
            "title": "Lane",
            "groups": ["Swimlanes"],
            "groups_de": ["Rollen"],
            "description": "Pools and Lanes represent responsibilities for activities in a process. A pool or a lane can be an organization, a role, or a system. Lanes sub-divide pools or other lanes hierarchically.",
            "description_de": "Pools und Lanes repräsentieren Rollen. Lanes repräsentieren Verantwortlichkeiten, wie etwa Organisationseinheiten, Stellen oder IT-Systeme. Lanes können hierarchisch in weitere Unter-Lanes untergliedert sein.",
            "view": "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?> <svg    xmlns=\"http://www.w3.org/2000/svg\"    xmlns:svg=\"http://www.w3.org/2000/svg\"    xmlns:oryx=\"http://www.b3mn.org/oryx\"    xmlns:xlink=\"http://www.w3.org/1999/xlink\"    width=\"600\"    height=\"250\"    version=\"1.0\">   <defs></defs>   <g pointer-events=\"painted\" >         <defs>   <radialGradient id=\"background\" cx=\"0%\" cy=\"10%\" r=\"100%\" fx=\"20%\" fy=\"10%\">    <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>    <stop id=\"fill_el\" offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\"/>   </radialGradient>  </defs>      <rect id=\"border_invisible\" class=\"stripable-element-force\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"600\" height=\"250\" fill=\"none\" stroke-width=\"10\" stroke=\"white\" visibility=\"hidden\"/>  <rect id=\"border\" oryx:resize=\"vertical horizontal\" x=\"0\" y=\"0\" width=\"600\" height=\"250\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />    <rect    id=\"caption\"   oryx:anchors=\"left top bottom\"   x=\"0\"   y=\"1\"   width=\"30\"   height=\"248\"   stroke=\"black\"   stroke-width=\"0\"   fill=\"white\"   visibility=\"hidden\"   class=\"stripable-element-force\"  />    <path          style=\"fill:none;stroke:#000000;stroke-width:1\"          d=\"M 0,0 L 0,250\"          oryx:anchors=\"left top bottom\"          id=\"captionDisableAntialiasing\" />    <!--rect    id=\"captionDisableAntialiasing\"   oryx:anchors=\"left top bottom\"   x=\"0\"   y=\"0\"   width=\"30\"   height=\"250\"   stroke=\"black\"   stroke-width=\"1\"   fill=\"url(#background) white\"  /-->       <text    x=\"13\"   y=\"125\"    oryx:rotate=\"270\"    font-size=\"14\"    id=\"text_name\"    oryx:align=\"middle center\"    oryx:anchors=\"left\"   oryx:fittoelem=\"caption\"   fill=\"black\"    stroke=\"black\">  </text>   </g> </svg> ",
            "icon": "swimlane/lane.png",
            "propertyPackages": [
                "baseAttributes"
            ],
            "properties": [
                {
                    "id": "parentpool",
                    "type": "String",
                    "title": "ParentPool",
                    "title_de": "Elternpool",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": false,
                    "refToView": "",
                    "length": "30"
                },
                {
                    "id": "parentlane",
                    "type": "String",
                    "title": "ParentLane",
                    "title_de": "Elternlane",
                    "value": "",
                    "description": "",
                    "readonly": false,
                    "optional": true,
                    "refToView": "",
                    "length": "30"
                },
                {
                    "id": "showcaption",
                    "type": "Boolean",
                    "title": "ShowCaption",
                    "title_de": "Zeige Beschriftung",
                    "value": "true",
                    "description": "",
                    "readonly": true,
                    "optional": false,
                    "refToView": ["caption", "captionDisableAntialiasing"],
                    "fill": true,
                    "visible": false,
                    "stroke": false,
                    "hidden": true
                }
            ],
            "roles": [
                "PoolChild",
                "fromtoall",
                "canContainArtifacts"
            ],
            "layout": [
                {"type": "layout.bpmn11.lane"},
                {
                    "type": "layout.container.minBounds",
                    "options": {
                        "ignoreChildsWithId": [
                            "http://b3mn.org/stencilset/bpmn2.0#Lane"
                        ]
                    }
                }
            ]
        },
        {
            "type": "node",
            "id": "processparticipant",
            "title": "Additional Participant",
            "title_de": "Zusätzlicher Beteiligter",
            "groups": ["Swimlanes"],
            "groups_de": ["Rollen"],
            "description": "he additional participant can be connected to a task or sub process. It is used to visualize additional associations of roles or individuals to the respective activity (e.g. responsibility, informed persons, etc.).",
            "description_de": "Ein zusätzlicher Beteiligter kann an einen Task oder Unterprozess angeheftet werden. Mit ihm können zusätzliche Beziehungen einer Rolle oder Person zu der jeweiligen Aufgabe abgebildet werden (z.B. fachliche Verantwortung, Benachrichtigte Personen, etc.).",
            "view": "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"no\" ?> <svg      xmlns=\"http://www.w3.org/2000/svg\"     xmlns:svg=\"http://www.w3.org/2000/svg\"     xmlns:oryx=\"http://www.b3mn.org/oryx\"     xmlns:xlink=\"http://www.w3.org/1999/xlink\"          width=\"60px\"      height=\"60px\"     version=\"1.0\">   <g>      <defs>         <radialGradient id=\"background\" cx=\"30%\" cy=\"30%\" r=\"50%\" fx=\"0%\" fy=\"0%\">             <stop offset=\"0%\" stop-color=\"#ffffff\" stop-opacity=\"1\"></stop>             <stop offset=\"100%\" stop-color=\"#ffffff\" stop-opacity=\"1\" id=\"fill_el\"></stop>         </radialGradient>     </defs>     <path fill=\"url(#background) #ffffff\" stroke=\"#010101\" d=\"M7.757,58.934h51.667V41.758c0,0-5.114-8.586-15.527-11.328H24.751         C12.313,33.384,7.575,43.037,7.575,43.037L7.757,58.934z\"/>               <path fill=\"none\" stroke=\"#010101\" d=\"M18.49,49.799v8.771\"/>       <path fill=\"none\" stroke=\"#010101\" d=\"M48.051,49.799v8.771\"/>       <circle fill=\"#010101\" stroke=\"#010101\" cx=\"33.845\" cy=\"18.916\" r=\"11.879\"/>       <path fill=\"#F1F0F1\" stroke=\"#010101\" d=\"M22.972,21.474c0,0,6.17-5.319,11.788-3.962C40.379,18.87,44.9,15.994,44.9,15.994         c0.549,3.701,0.093,8.222-3.199,12.243c0,0,2.377,1.644,2.377,3.289c0,1.647,0.272,4.111-2.193,6.58         c-2.465,2.465-12.061,2.741-14.801,0c-2.741-2.742-2.741-4.02-2.741-5.849c0-1.828,1.278-2.74,2.741-4.202         C24.708,26.775,21.604,22.845,22.972,21.474z\"/>               <text font-size=\"12\" id=\"text_name\" x=\"34\" y=\"66\" oryx:align=\"center top\" stroke=\"black\" />            </g> </svg> ",
            "icon": "swimlane/process.participant.png",
            "defaultAlign": "northeast",
            "propertyPackages": [
                "baseAttributes",
                "flowElement",
                "artifact",
                "bgColor"
            ],
            "roles": [
                "all",
                "from_participant",
                "to_participant",
                "fromtoall",
                "eventSubprocessElement"
            ]
      }
    ],
    "rules": {
        "cardinalityRules": [],
        "connectionRules": [],
        "containmentRules": [
            {
                "role": "BPMNDiagram",
                "contains": ["all"]
            }
        ],
        "morphingRules": [],
        "layoutRules": []
    }
}
