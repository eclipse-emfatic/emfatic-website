# Download

You can use the following update sites through the `Help->Install new software` menu in Eclipse to install Emfatic.

| Site | Location |
| - | - |
| Stable | `http://download.eclipse.org/emfatic/update`|
| Interim | `http://download.eclipse.org/emfatic/interim`|

## Maven

JARs of stable versions of Emfatic are available on [Maven Central](https://mvnrepository.com/artifact/org.eclipse.emfatic/org.eclipse.emfatic.core). Emfatic interm JARs are available from [Sonatype](https://oss.sonatype.org/#nexus-search;quick~emfatic). To use the Emfatic from your `pom.xml`:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<project xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/xsd/maven-4.0.0.xsd" xmlns="http://maven.apache.org/POM/4.0.0"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
  <modelVersion>4.0.0</modelVersion>
  
  <groupId>org.eclipse.emfatic</groupId>
  <artifactId>standalone-example</artifactId>
  <version>1.0.0-SNAPSHOT</version>
  
  <repositories>
    <repository>
      <id>Sonatype</id>
      <url>https://oss.sonatype.org/content/repositories/snapshots</url>
    </repository>
  </repositories>
  
  <properties>
    <epsilon.scope>compile</epsilon.scope>
    <maven.compiler.source>1.8</maven.compiler.source>
    <maven.compiler.target>1.8</maven.compiler.target>
  </properties>
  
  <dependencies>
    <dependency>
      <groupId>org.eclipse.emfatic</groupId>
      <artifactId>org.eclipse.emfatic.core</artifactId>
      <version>1.0.1-SNAPSHOT</version>
    </dependency>
  </dependencies>

</project>
```