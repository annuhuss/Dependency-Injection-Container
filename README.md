<h1>
Dependency Injection Container: A simple introduction for managing objects from their creation to their configuration by the implementation of a container in PHP.
</h1>

<p>
<em>Dependency Injection</em> is the term frequently used in the area of Object Oriented Programming and it is one of the design patterns that one should know deeply for writing and organizing better code. In addition, if somebody has a good understanding of how to handle dependencies in conjunction with a container then it would provide him an extra advantage for learning a framework quickly. As far I remember, I have faced some difficulties as a beginner for understanding a PHP framework without having any idea about how to use a container that handles dependencies. Nevertheless it is not always necessary to use a container for managing objects, specially when you are dealing with a small collection of objects in your application, though practicing it would absolutely be beneficial for producing elegant code.
</p>

<p>
Like some other design patterns, injecting dependencies is not fixed. Apparently there are many ways to do it and the two most common out of them are Constructor Injection and Setter Injection. In this article I am not going to discuss about what the Dependency Injection is? Rather, I would like to focus on the primary construction of a container which takes the responsibility for managing objects from their creation to their configuration. This discussion will be carried on by introducing some basic features of PHP container through some simple examples respectively.
</p>

<p>
As we already know, Dependency Injection is a technique for presenting code in a more stylish and efficient way. Concisely, the introduction of Dependency Injection makes an application more rigorous by avoiding hard coding and give it more flexibility for controlling its objects after all. But what is Dependency Injection Container, how it serves and why should we use it?
</p>

<p>
"A Dependency Injection Container is an object that knows how to instantiate and configure objects. And to be able to do its job, it needs to knows about the constructor arguments and the relationships between the objects", by Fabien Potencier written in one of his excellent <i><a href="http://fabien.potencier.org/do-you-need-a-dependency-injection-container.html">posts</a></i> on Dependency Injection.
</p>

<p>
In short, a container is a tool that manages objects from their instantiation to their configuration by the action of on demand dependencies. These injected dependencies are the data which usually categorized as objects and parameters.
</p>

<p>
Although it is not worthwhile using a Dependency Injection Container to get advantage from Dependency Injection in the following mini consecutive examples, wherein a very few different objects are needed as dependencies for executing required tasks. But for the sake of simplicity, I am going to introduce Dependency Injection as well as some other features, such as shared instances and PHP magic __set() and __get() methods through these sequential examples so that one would have gained a good understanding on the basic features of a Dependency Injection Container by the end of this article.
</p>

<p>
My motive for the examples below are quite similar to each other but, if one follows the example's names, as the number with a underscore sign grow a new feature of the Dependency Injection Container are included consecutively to flourish the container:
</p>

<p>
<ul>
<li><i><strong>container.php</strong></i></li>
<li><i><strong>container_2.php</strong></i></li>
<li><i><strong>container_3.php</strong></i></li>
<li><i><strong>container_4.php</strong></i></li>
</ul>
</p>

<p>
<i>
A detail illustration on this topic and some of my other Object-Oriented-Programming articles can be found in 
<a href="https://medium.com/@annuhuss/">the medium blog site</a>.
</i>
</p>
