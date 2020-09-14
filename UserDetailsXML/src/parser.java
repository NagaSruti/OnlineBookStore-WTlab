
import javax.xml.parsers.DocumentBuilderFactory;

import javax.xml.parsers.DocumentBuilder;
import org.w3c.dom.Document;
import org.w3c.dom.NodeList;
import org.w3c.dom.Node;
import org.w3c.dom.Element;
import java.io.File;
import java.io.IOException;
import java.util.Scanner;
import javax.xml.parsers.ParserConfigurationException;
import org.xml.sax.SAXException;

public class parser{

    public static void main(String[] argv) throws SAXException,IOException, ParserConfigurationException{
    	Scanner scan = new Scanner(System.in);
    	boolean available = false;
        File xmlFile = new File("/home/satya/eclipse-workspace/wiseprojects/UserDetailsXML/WebContent/users.xml");

        DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
        DocumentBuilder dBuilder = factory.newDocumentBuilder();
        Document doc = dBuilder.parse(xmlFile);
        doc.getDocumentElement().normalize();
        NodeList nList = doc.getElementsByTagName("user");
       
        System.out.print("Enter User ID:");
        String num = scan.nextLine();

        for (int i = 0; i < nList.getLength(); i++){
            Node nNode = nList.item(i);
            Element elem = (Element) nNode;
            String uid = elem.getAttribute("id");
            if (num.equals(uid) && nNode.getNodeType() == Node.ELEMENT_NODE){
            		available = true;
                    Node node1 = elem.getElementsByTagName("username").item(0);
                    String name = node1.getTextContent();

                    Node node2 = elem.getElementsByTagName("mobile").item(0);
                    String mobile = node2.getTextContent();

                    Node node3 = elem.getElementsByTagName("address").item(0);
                    String address = node3.getTextContent();

                    Node node4 = elem.getElementsByTagName("email").item(0);
                    String email = node4.getTextContent();
                    
                    System.out.println();
                    System.out.println("User Details:-");
                    System.out.println("User Id: " + uid);
                    System.out.println("User Name: " + name);
                    System.out.println("Mobile Number: " + mobile);
                    System.out.println("Address: " +  address);
                    System.out.println("Email: " +  email);
                
            }
        }
        
        if (!(available)){
        System.out.println("Invalid User ID");
        }
    }
    }